<?php
require '../models/Catigorie.php';
class CatigorieController{
    public function getAllCatigories() {
        $catigories = Catigorie::getAll();
        return $catigories;
    }

    public function getOneCategorie(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$categorie = Catigorie::getCategorie($data);
			return $categorie;
		}
	}

    public function AddCatigorie() {
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $date = "";
            if(isset($_POST['Ajouter'])){  
                $date=date('Y-m-d ');
                $Nom=$_POST['libelle'];
                $description=$_POST['description'];
                $date_creation=$date;
                if(!empty($Nom)){
                    $result = Catigorie::Add($Nom,$description,$date_creation);
                    if($result===true){
                        echo "ajouter avec success ";
                    }else{
                        echo "no ajoute";
                    }
                }
            }
           
        } else
            {
            echo "romplier les choo";
            }
    }
    public function updateCategorie(){
		if(isset($_POST['submit'])){
			$data = array(
				'id' => $_POST['id'],
				'libelle' => $_POST['libelle'],
				'description' => $_POST['description'],
				'date_creation' => $_POST['date_creation'],
				
			);
			$result = Catigorie::update($data);
			if($result === 'ok'){
				header('Location: ../view/Catigorie.php');

			}else{
				echo $result;
			}
		}
	}

    public function deleteCartigorie($id){
        Catigorie::delete($id);
        header('Location: Catigorie.php');
}

}

?>