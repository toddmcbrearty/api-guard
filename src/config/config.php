<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | ApiGuard key generator route
    |--------------------------------------------------------------------------
    |
    | You can set this to false once you're done generating an initial API key
    |
    */

    'generateApiKeyRoute'  => true,

    /*
    |--------------------------------------------------------------------------
    | API request logging
    |--------------------------------------------------------------------------
    |
    | This switch will enable or disable logging of the requests made. This
    | feature needs to be enabled for API request limiting to work
    |
    */

    'logging'              => true,

    /*
    |--------------------------------------------------------------------------
    | Key name
    |--------------------------------------------------------------------------
    |
    | This is the name of the variable that will provide us the API key in the
    | header
    |
    */

    'keyName'              => 'X-Authorization',

    /*
    |--------------------------------------------------------------------------
    | Variable name for Fractal's include / embed objects
    |--------------------------------------------------------------------------
    |
    | Set the variable name for Fractal's include / embed keyword here. This is
    | automatically parsed if it exists in the GET parameters. Values are
    | comma-separated.
    |
    */

    'includeKeyword'       => 'include',

    /*
    |--------------------------------------------------------------------------
    | Api key access limit increment
    |--------------------------------------------------------------------------
    |
    | This is the default value for the increment of limits when defining
    | limits in the methods. The default value is "1 hour" which means that
    | if you specified a limit of 100 to a method, it will limit requests to
    | 100 for every 1 hour. This value can be any value acceptable by the
    | strtotime() method of PHP.
    |
    | Examples:
    | 1 hour
    | 1 day
    | 15 minutes
    |
    */

    'keyLimitIncrement'    => '1 hour',

    /*
    |--------------------------------------------------------------------------
    | Method key access limit increment
    |--------------------------------------------------------------------------
    |
    | This is the default value for the increment of limits when defining
    | limits in the methods. The default value is "1 hour" which means that
    | if you specified a limit of 100 to a method, it will limit requests to
    | 100 for every 1 hour. This value can be any value acceptable by the
    | strtotime() method of PHP.
    |
    | Examples:
    | 1 hour
    | 1 day
    | 15 minutes
    |
    */

    'methodLimitIncrement' => '1 hour',

);
