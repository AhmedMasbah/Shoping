<?php
    require_once '../database/DB.php';

class Client{



static  function login($data){
        $login = $data['login_cle'];
        try{
            $query  = 'SELECT * FROM client WHERE login_cle = :login';
            $stmt   = DB::connect()->prepare($query);
            $stmt->execute(array(":login" => $login));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;

        }catch(Exception $e)
        {
            echo "error".$e->getMessage();
        }
    }

    static function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO `client`( `nom`, `prenom`, `telephone`, `login_cle`, `email`, `pass_cle`) 
        VALUES (:nom, :prenom, :telephone, :login_cle , :email, :pass_cle)');
        $stmt->bindParam(':nom',$data['nom']);
        $stmt->bindParam(':prenom',$data['prenom']);
        $stmt->bindParam(':telephone',$data['telephone']);
        $stmt->bindParam(':login_cle',$data['login_cle']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':pass_cle',$data['pass_cle']);
        if($stmt->execute())
        {
            return true;
        }else{
            return false;
        }

    }
} 