<?php
// This is the main layout file - a concept borrowed from Rails.
define('LAYOUT', './views/layouts/main.php');


// the flash variable would be used to display messages to the user through a redirect
// ultimately, this would be stored in a session variable.
$flash = (object) array('message'=>'Hello, Bob');

require_once(LAYOUT);
?>
