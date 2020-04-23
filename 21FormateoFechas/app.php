/config/


<?php


        /*
         * Application Service Providers...
         */
        ...
	App\Providers\FormatTimeServiceProvider::class

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        	...
		'FormatTime' => App\Helpers\FormatTime::class
    ],

];
