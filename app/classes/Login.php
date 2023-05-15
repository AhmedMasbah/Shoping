<?php
class Login extends Connection{
    public $id;
    public function login2($usernameemail, $password){
      $result = mysqli_query($this->conn, "SELECT * FROM utilisateur WHERE login = '$usernameemail' OR password = '$usernameemail'");
      $row = mysqli_fetch_assoc($result);
  
      if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
          $this->id = $row["id"];
          return 1;
          // Login successful
        }
        else{
          return 10;
          // Wrong password
        }
      }
      else{
        return 100;
        // User not registered
      }
    }
  
    public function idUser(){
      return $this->id;
    }
  }
  
  class Select extends Connection{
    public function selectUserById($id){
      $result = mysqli_query($this->conn, "SELECT * FROM utilisateur WHERE id = $id");
      return mysqli_fetch_assoc($result);
    }
  }