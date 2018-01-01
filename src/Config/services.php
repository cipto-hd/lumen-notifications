<?php
return [
    
    /*
     * |--------------------------------------------------------------------------
     * | Third Party Services
     * |--------------------------------------------------------------------------
     * |
     * | This file is for storing the credentials for third party services such
     * | as Stripe, Mailgun, SparkPost and others. This file provides a sane
     * | default location for this type of information, allowing packages
     * | to have a conventional place to find your various credentials.
     * |
     */
    
    'sns' => [
        'key' => env('SNS_KEY'),
        'secret' => env('SNS_SECRET'),
        'region' => env('SNS_REGION', 'us-east-1')
    ],
    
    'sendgrid' => [
        'api_key' => env('SENDGRID_API_KEY'),
        'version' => 'v3'
    ],
    
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET')
    ],
    
    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1'
    ],
    
    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET')
    ],
    
    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET')
    ]
];
