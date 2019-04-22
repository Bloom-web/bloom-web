<?php

    // If we want to use different databases in the future, this makes it possible
    $http_host = getenv('HTTP_HOST');
    switch($http_host)
    {
        case('www.bloomconsultinggroup.com'):
            $env_vars = "/../../../";
        break;
        case('bloomconsultinggroup.com'):
            $env_vars = "/../../../";
        break;
        case('staging.bloomconsultinggroup.com'):
            $env_vars = "/../../../";
        break;   
        case('bloomcon.wwwaz1-ss18.a2hosted.com'):
            $env_vars = "/../../../";
        break;   
        case('localhost'):
        break;
    }
    
	// Grab environment variables with dotenv
	require __DIR__ . '/../../../vendor/autoload.php';
	$dotenv = Dotenv\Dotenv::create(__DIR__.$env_vars);
	$dotenv->load();

	// Define all the perch settings from the variables
    define('PERCH_LICENSE_KEY', getenv('perch_license_key'));

    define('PERCH_DB_SERVER', getenv('db_server'));
    define('PERCH_DB_DATABASE', getenv('db_database'));
    define('PERCH_DB_USERNAME', getenv('db_user'));
    define('PERCH_DB_PASSWORD', getenv('db_pass'));
    define('PERCH_DB_PREFIX', 'perch_');
    
    define('PERCH_EMAIL_METHOD', 'mail');
//    define('PERCH_EMAIL_HOST', $email_host);
//    define('PERCH_EMAIL_USERNAME', $email_username);
//    define('PERCH_EMAIL_PASSWORD', $email_password);
//    define('PERCH_EMAIL_AUTH', true);
//    define('PERCH_EMAIL_SECURE', 'ssl');
//    define('PERCH_EMAIL_PORT', 465);
    define('PERCH_EMAIL_FROM', 'design@bloomconsultinggroup.com');
    define('PERCH_EMAIL_FROM_NAME', 'Bloom Web (perch)');

    define('PERCH_TZ', 'PST8PDT');
    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');
    define('PERCH_RESFILEPATH', $_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR.'imagez');
    define('PERCH_RESPATH', '/imagez');
    define('PERCH_HTML5', true);
?>