<?php
require_once '../database/DB.php';
session_start();


class Utilisaature{
    static public function getUser(){
        $stmt= DB::connect()->prepare('SELECT * FROM utilisateur');
        $stmt->execute();
        return $stmt->fetchAll();  
    }
    static public function Add($nom, $prenom, $login, $telephone, $email, $password, $date){
        try{
        $stmt= DB::connect()->prepare(
            'INSERT INTO utilisateur ( nom, prenom, login, telephone, email, password, date_creation)
             VALUES (?,?,?,?,?,?,?)');
            $resulte= $stmt->execute([ $nom, $prenom, $login, $telephone, $email, $password, $date]);
            //return $resulte;
            if($resulte)
            {
                return true;
            }
            else{
                return false;
            }
        }catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    static function delete($id_user){
       
        try
        {
            $query= " DELETE FROM utilisateur WHERE id=? ";
            $stmt= DB::connect()->prepare($query);
            $delet=$stmt->execute([$id_user]);
            
        if($delet)
            {
                return true;
            }else
            {
                return false;
            }
        }catch(Exception $e){
            echo "error".$e->getMessage();
        }
    }
   
}

  
