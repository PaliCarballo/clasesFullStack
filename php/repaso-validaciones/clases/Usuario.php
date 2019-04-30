<?php
// hay que cambiar los atributos para que queden privados
 class Usuario {
   public $email;
   public $password;
   public $avatar;

   public function __construct($email, $password, $avatar){
     $this->email = $email;
     $this->password = $password;
     $this->avatar = $avatar;
   }
   public function getEmail(){
     return $this->email;
   }
   public function getAvatar(){
     return $this->avatar;
   }


 }
