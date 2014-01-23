<?php

use User;

// This is the main layout file - a concept borrowed from Rails.
define('LAYOUT', './views/layouts/main.php');
define('MODELS_DIRECTORY', './models/');

// load the user class
require_once(MODELS_DIRECTORY.'User.php');

$user_name = $_POST['username'];
$user = User::find_by_username($user_name);
$first_name = $user->get_first_name();

// the flash variable would be used to display messages to the user through a redirect
// ultimately, this would be stored in a session variable.
$flash = (object) array('message'=>"Hello, $first_name");

require_once(LAYOUT);
?>