<?php

return [

    /*
     * You can enable CORS for 1 or multiple paths.
     * Example: ['api/*']
     */
    'paths' => ['/user','api/*'],

    /*
    * Matches the request method. `[*]` allows all methods.
    */
    'allowed_methods' => ['*'],

    /*
     * Matches the request origin. `[*]` allows all origins.
     */
    'allowed_origins' => ['*'],

    /*
     * Matches the request origin with, similar to `Request::is()`
     */
    'allowed_origins_patterns' => [],

    /*
     * Sets the Access-Control-Allow-Headers response header. `[*]` allows all headers.
     */
    'allowed_headers' => ['*'],

    /*
     * Sets the Access-Control-Expose-Headers response header.
     */
    'exposed_headers' => false,

    /*
     * Sets the Access-Control-Max-Age response header.
     */
    'max_age' => false,

    /*
     * Sets the Access-Control-Allow-Credentials header.
     */
    'supports_credentials' => false,
];

// return [

//     /*
//      * You can enable CORS for 1 or multiple paths.
//      * Example: ['api/*']
//      */
//     'paths' => [
//         'api/*', 
//         '/*'
//     ],

//     /*
//     * Matches the request method. `[*]` allows all methods.
//     */
//     'allowed_methods' => ['*'],

//     /*
//      * Matches the request origin. `[*]` allows all origins.
//      */
//     'allowed_origins' => ['*','http://localhost:3000/','http://127.0.0.1:8000'],

//     /*
//      * Matches the request origin with, similar to `Request::is()`
//      */
//     'allowed_origins_patterns' => ['*'],

//     /*
//      * Sets the Access-Control-Allow-Headers response header. `[*]` allows all headers.
//      */
//     'allowed_headers' => ['*'],

//     /*
//      * Sets the Access-Control-Expose-Headers response header.
//      */
//     'exposed_headers' => false,

//     /*
//      * Sets the Access-Control-Max-Age response header.
//      */
//     'max_age' => false,

//     /*
//      * Sets the Access-Control-Allow-Credentials header.
//      */
//     'supports_credentials' => false,
// ];

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Cross-Origin Resource Sharing (CORS) Configuration
//     |--------------------------------------------------------------------------
//     |
//     | Here you may configure your settings for cross-origin resource sharing
//     | or "CORS". This determines what cross-origin operations may execute
//     | in web browsers. You are free to adjust these settings as needed.
//     |
//     | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
//     |
//     */

//     'paths' => ['api/*'],

//     'allowed_methods' => ['*'],

//     'allowed_origins' => ['*'],

//     'allowed_origins_patterns' => [],

//     'allowed_headers' => ['*'],

//     'exposed_headers' => [],

//     'max_age' => 0,

//     'supports_credentials' => false,

// ];
