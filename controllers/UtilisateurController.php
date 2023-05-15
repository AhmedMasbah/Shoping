<?php 
require '../models/Utilisaature.php';

class UtilisateurController{
    public function getAllUser()
    {
        $Users = Utilisaature::getUser();
        return $Users;
    }
    
    public function AddUser(){
        if(isset($_POST['Ajouter'])){
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $login=$_POST['login'];
            $tele= $_POST['telephone'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $Confi_password=$_POST['Confi_password'];
            $date= date('Y-m-d ');

            if($nom=="")
            {
                $error_message_nom="nom est ebligatior";
                return $error_message_nom;
            }elseif($password!==$Confi_password)
            {
                $error_message_pass="Le mot de passe un un correct ";
                return $error_message_pass;
            }
            elseif(strlen($login)>10 and strlen($login)<4)
            {
                $error_message_login_len=" login invalid !! le nombre de caracte entre '5 et 10' ";
                return $error_message_login_len;
            }
           elseif(preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#",$tele )|| strlen($tele)>10){
                $error_message_tele= "Le numéro du portable est faux : $tele";
                return $error_message_tele;
            }else{
                $resulte_Add = Utilisaature::Add($nom,$prenom,$login,$tele,$email,$Confi_password,$date);
                if($resulte_Add===true)
                {
                    echo "bient ajouter avec success";
                }
                if($resulte_Add===false)
                {
                    echo "no  ajouter";
                }
            }
        }
        
           
                
    }

    public function deleteUser($id){
        Utilisaature::delete($id);
        header('location: ../view/AddUser.php');
        
    }


   

    public function logout(){
        session_destroy();
    }
}

       

