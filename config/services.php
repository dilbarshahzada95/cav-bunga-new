<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '1801058270582424',
        'client_secret' => 'f9f9f9f9f9f9f9f9f9f9f9f9f9f9f9f9',
        'redirect' => 'http://localhost:8000/login/facebook/redirce',
    ],
    'google' => [
        'client_id' => '142908732365-i8d4bro7soat69bfalt3509rke3d0nf4.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/gmail/redircet',
    ],

];
