<?php
// This is the main layout file - a concept borrowed from Rails.
define('LAYOUT', './views/layouts/main.php');

// We still want the code to be as simple as possible, so let's store the users in an array
$users = array(
   'bob'=> array('first_name'=>'Bob'), 
   'charles'=> array('first_name'=>'Charles')
);

$user_name = $_POST['username'];
$user = $users[$user_name];
$first_name = $user['first_name'];

// the flash variable would be used to display messages to the user through a redirect
// ultimately, this would be stored in a session variable.
$flash = (object) array('message'=>"Hello, $first_name");

require_once(LAYOUT);
?>
