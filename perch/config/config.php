<?php
    // If we want to use different databases in the future, this makes it possible
    $http_host = getenv('HTTP_HOST');
    switch($http_host)
    {
        case('www.bloomconsultinggroup.com'):
            $connection_string = getenv("MYSQLCONNSTR_bloomweb");
        break;
        case('bloomconsultinggroup.com'):
            $connection_string = getenv("MYSQLCONNSTR_bloomweb");
        break;
        case('bloomweb-staging.azurewebsites.net'):
            $connection_string = getenv("MYSQLCONNSTR_bloomweb");
        break;   
        case('localhost'):
        break;
    }
    
    // Get azure appsettings variable for perch license
    $perch_license_key = getenv("perch_license_key");
    
    // Get credentials for sending emails
    $email_host = getenv("email_host");
    $email_username = getenv("email_username");
    $email_password = getenv("email_password");
    
    // Parse db connection string into variables for below
    $vars_string = str_replace(";","&",$connection_string);
    parse_str($vars_string);

	// Define all the perch settings from the variables
    define('PERCH_LICENSE_KEY', $perch_license_key);

    define('PERCH_EMAIL_METHOD', 'smtp');
    define('PERCH_EMAIL_HOST', $email_host);
    define('PERCH_EMAIL_USERNAME', $email_username);
    define('PERCH_EMAIL_PASSWORD', $email_password);
    define('PERCH_EMAIL_AUTH', true);
    define('PERCH_EMAIL_SECURE', 'ssl');
    define('PERCH_EMAIL_PORT', 465);
    define('PERCH_EMAIL_FROM', 'design@bloomconsultinggroup.com');
    define('PERCH_EMAIL_FROM_NAME', 'Bloom Web (perch)');

    define("PERCH_DB_USERNAME", $User_Id);
    define("PERCH_DB_PASSWORD", $Password);
    define("PERCH_DB_SERVER", $Data_Source);
    define("PERCH_DB_DATABASE", $Database);
    define("PERCH_DB_PREFIX", 'perch_');
    
    define('PERCH_TZ', 'PST8PDT');
    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');
    define('PERCH_RESFILEPATH', $_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR.'imagez');
    define('PERCH_RESPATH', '/imagez');
    define('PERCH_HTML5', true);
 
?>