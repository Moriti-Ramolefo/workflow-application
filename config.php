<?php
// Database configuration 
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'workflow-db');
// define('DB_HOST', 'us-cdbr-east-06.cleardb.net');
// define('DB_USERNAME', 'bc8a2b80412599');
// define('DB_PASSWORD', '7e8cb8e1');
// define('DB_NAME', 'heroku_af56457955d7054');

// Google API configuration
define('GOOGLE_CLIENT_ID', '157917776823-a58mlq6h9a068nup6lelorc3a4d33jfb.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive');
define('REDIRECT_URI', 'http://localhost:8888/workflow-application/gd-sync.php');
// define('REDIRECT_URI', 'https://workflow-application.herokuapp.com/gd-sync.php');

// Start session
if(!session_id()) session_start();

// Google OAuth URL
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online';

?>