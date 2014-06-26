<?php

/**
 * Environment variables
 * In production make a copy of this file and name it ".env.php".
 * For other environments, create files named ".env.*.php" where * is the name of the environment.
 *
 * http://laravel.com/docs/configuration#protecting-sensitive-configuration
 */
return array(

    /**
     * Environment
     */
    'APP_ENV' => 'local',

    /**
     * Encryption Key
     */
    'APP_KEY' => 'YourKey',

    /**
     * Analytics
     */
    'ANALYTICS_ID'     => '',
    'ANALYTICS_DOMAIN' => '',

    /**
     * Database
     */
    'DB_HOST'     => 'localhost',
    'DB_DATABASE' => 'camillagejl_com_v1',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',

    /**
     * MAIL
     */
    'EMAIL_PASS' => '',

);
