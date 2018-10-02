<?php
    class User{
     var $_name;
     var $_email;
     var $_password;
     var $_phone;
     var $_address;
     
     //function Add
     
     function AddUser($name, $email, $password, $phone, $address) {
         $this -> _name = $name; 
         $this -> _email = $email;
         $this -> _password = $password;
         $this -> _phone = $phone;
         $this -> _address = $address;
         
     }
     
     //function Edit
     
     function EditUser($name, $password) {
         
     }
    } 
?>