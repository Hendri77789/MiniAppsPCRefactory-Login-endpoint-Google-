<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('800119061911-o6tg5hv8lmgj3755ci5q0m180qdkrohq.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google/dashboard.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>