<?php

Class User{
   
   // a list of all of the legitimate users - this will ultimately come from a database
   private static $legitimate_users = array(
      'bob'=> array('first_name'=>'Bob'), 
      'charles'=> array('first_name'=>'Charles')
   );

   private $username;
   private $first_name;

   /**
    * This simplistic constructor populates the username and first_name fields
    */
   function __construct($username, $first_name){
      $this->username = $username;
      $this->first_name = $first_name;
   }

   /**
    * Returns the user's first name
    */
   public function get_first_name(){
      return $this->first_name;
   }

   /**
    * Returns an object that represents a user with the supplied username
    * param @username The username of the user
    */
   public static function  find_by_username($username){
      $user_array = self::$legitimate_users[$username];
      $first_name = $user_array['first_name'];
      $user = new User($username, $first_name);
      return $user;
   }
} 