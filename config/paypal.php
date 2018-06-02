<?php
return array(
    // set your paypal credential
    'client_id' => 'AbADZXbkx24TyO0DjabqNuS4amC6C8R7iK2xMY31CCZVeOP9GIDquwhRAUJKDyTht-ppcjuygvzPsoDO',
    'secret' => 'EPKkFlWsZrjYLqVUmTwcXXdHoK-DRArasWowrXNUZs8-83ixjaT3E3CzUqfDC7YL0xIshkoutAFc0eMR',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);