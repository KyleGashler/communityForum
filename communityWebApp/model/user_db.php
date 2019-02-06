<?php
require('database.php');

function get_users() {
   global $db;
   $query = 'SELECT UserId, Firstname, Lastname, Email FROM user';
   $statement = $db->prepare($query);
   $statement->execute();
   $users = $statement->fetchAll();
   $statement->closeCursor();
   return $users;
}

function login($email, $password){
   global $db;
   $query = 'SELECT UserId, Firstname, Lastname, Email FROM user WHERE Email = :email AND Password = md5(:password)';
   $statement = $db->prepare($query);
  
   $statement->bindParam(':email', $email);
   $statement->bindParam(':password', $password);   
          
   $statement->execute();
   $user = $statement->fetch(PDO::FETCH_BOTH);
   $statement->closeCursor();
   //var_dump($user);
   return $user;   
}
