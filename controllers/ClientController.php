<?php 

include '../models/Client.php';


class ClientController{
    public function loginClient(){
        if(isset($_POST['submit'])){
            $data['login_cle'] = $_POST['login_cle'];
            $result=Client::login($data);
            if($result->login_cle===$_POST['login_cle']&& password_verify($_POST['pass_cle'],$result->pass_cle)){
                $_SESSION['logged']=true;
                $_SESSION['nom']=$result->nom;
                $_SESSION['prenom']=$result->prenom;
                $_SESSION['telephone']=$result->telephone;
                $_SESSION['login_cle']=$result->login_cle;
                $_SESSION['email']=$result->email;
                header('location:../index.php');
            }else{
                echo " login eu mot de passe uncorecte";
            }
        }
    }

    public function register(){
        $options = ["cost"=>12];
        $pass_cle = password_hash($_POST['pass_cle'],PASSWORD_BCRYPT,$options);
        $data = array(
            "nom"=>$_POST['nom'],
            "prenom"=> $_POST['prenom'],
            "telephone"=>$_POST['telephone'],
            "login_cle"=>$_POST['login_cle'],
            "email"=>$_POST['email'],
            "pass_cle"=>$pass_cle,
        );
        
        $result = Client::createUser($data);
        if ($result===true){ ?>
            <div style=" text-align: center; " class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
            </div>
            <?php 
            header('Location:../view/login.php');
            
        }
        else{
            echo $result;
        }
    }
    
    public function logout(){
        session_destroy();
    }
}