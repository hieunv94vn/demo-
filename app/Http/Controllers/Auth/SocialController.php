<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Laravel\Socialite\Contracts\Factory as Socialite;

class SocialController extends Controller
{
    public function __construct(Socialite $socialite){
           $this->socialite = $socialite;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register_social(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
   protected function create_social(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'avatar' => 'user/avatar.png',
            'role' => '1',
        ]);
    }

    public function getSocialAuth($provider=null)
    {
        if(!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist
        return $this->socialite->with($provider)->redirect();
    }

    public function getSocialAuthCallback($provider=null)
    {
        if($user = $this->socialite->with($provider)->user())
        {
            if ($authUser = User::where('email', $user->email)->first()) {
                Auth::login($authUser, true);
                return Redirect::to('/home');
            }else{
                return view('/test', compact('user'));
            }
        }else{
             return 'something went wrong';
        }
    }
}
