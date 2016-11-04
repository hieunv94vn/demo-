<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '343802510859-h42m0d4jko439c4j0tmtm1s8st87kie3.apps.googleusercontent.com',
        'client_secret' => 'x8sVtP7NE0S7biHKyrLw2YWi',
        'redirect' => 'http://test.app/auth/callback/google',
    ],

     'facebook' => [
        'client_id' => '1615697728755532',
        'client_secret' => 'b0764dee048b9a5d2e95ee7e355d17b6',
        'redirect' => 'http://test.app/auth/callback/facebook',
    ],

    'twitter' => [
        'client_id' => 'WT3ZwikQKQpCSzN68lGKOb2FG',
        'client_secret' => 'jPYs7bdcJKlcBCc9Ztu1kZBMJ3dSjwUCijekDwneOkdIsgmqJv',
        'redirect' => 'http://test.app/auth/callback/twitter',
    ],

];
