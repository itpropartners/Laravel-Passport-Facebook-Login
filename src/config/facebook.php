<?php

return [
    'app' => [
        'id' => env('FACEBOOK_APP_ID'),
        'secret' => env('FACEBOOK_APP_SECRET'),
    ],

    'registration' => [
        'attach_role' => null,
    ],


    'accessTokenExpireIn' => env('ACCESS_TOKEN_EXPIRE'),
    'refreshTokenExpireIn' => env('REFRESH_TOKEN_EXPIRE'),
];
