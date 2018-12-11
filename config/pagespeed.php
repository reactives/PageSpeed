<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Encryption Keys
    |--------------------------------------------------------------------------
    |
    | Passport uses encryption keys while generating secure access tokens for
    | your application. By default, the keys are stored as local files but
    | can be set via environment variables when that is more convenient.
    |
    */
    'api_key' => env('PAGE_SPEED_KEY'),
    'api_url' => env('PAGE_SPEED_API_URL'),
];
