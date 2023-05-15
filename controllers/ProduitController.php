<?php
require '../models/Produit.php';

class ProduitController {
    public function getAllProduits() {
        $produits = Produit::getAll();
        return $produits;
    }

   

    //___________________________FILTER THE PRODUCTS___________________________________


    //___________________________FILTER THE PRODUCTS PAGE SHOPE___________________________________

    public function getOneProduit(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $article = Produit::getProduit($data);
            return $article;
        }
        return null; // add this line to handle the case where $_POST['id'] is not set
    }

   

    public function AddProduct(){

            $date=date('Y-m-d ');
            $image=$_FILES['image']['name'];
            $filename =uniqid().$image;
            move_uploaded_file($_FILES['image']['tmp_name'],'../ImageArticle/'.$filename);
            $Nom=$_POST['nom'];
            $description=$_POST['description'];
            $qte=$_POST['qte'];
            $prix=$_POST['prix'];
            $discount=$_POST['discount'];
            $id_categorie=$_POST['id'];
            $date_creation=$date;
            if(!empty($Nom) && !empty($description)&& $qte>0 &&!empty($description)){
                $result = Produit::Add($Nom,$description,$qte,$prix,$discount,$id_categorie,$date_creation,$filename);

                if($result===true){
                    echo "ajouter avec success ";
                }else{
                    echo "no ajoute";
                }
            }
            else
                {
                echo "romplier les choo";
                }

        
    }
        
    
    public function editProduct(){

        if(isset($_POST['Modifier'])){
            $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
            $Nom = filter_var($_POST['Nom'], FILTER_SANITIZE_STRING);
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            $qte = filter_var($_POST['qte'], FILTER_VALIDATE_INT);
            $prix = filter_var($_POST['prix'], FILTER_VALIDATE_FLOAT);
            $discount = filter_var($_POST['discount'], FILTER_VALIDATE_FLOAT);
            $id_categorie = filter_var($_POST['id_categorie'], FILTER_VALIDATE_INT);
            $date = date('Y-m-d ');
    
            // Validate $id
            if (!$id) {
                echo '<div class="alert alert-danger" role="alert">ID invalide</div>';
                return;
            }
    
            // Check if Produit class exists
            if (!class_exists('Produit')) {
                echo '<div class="alert alert-danger" role="alert">Classe Produit non trouvée</div>';
                return;
            }
    
            // Check if editWhidImage method exists
            if (!method_exists('Produit', 'editWhidImage')) {
                echo '<div class="alert alert-danger" role="alert">Méthode editWhidImage non trouvée</div>';
                return;
            }
    
            // Check if ../ImageArticle/ directory exists and is writable
            if (!is_dir('../ImageArticle/') || !is_writable('../ImageArticle/')) {
                echo '<div class="alert alert-danger" role="alert">Répertoire ../ImageArticle/ inexistant ou non inscriptible</div>';
                return;
            }
    
            $filename='';
            if(!empty($_FILES['image']['name']))
            {
                $image=$_FILES['image']['name'];
                $filename=uniqid().$image;
                $file='../ImageArticle/'.$filename;
                if (move_uploaded_file($_FILES['image']['tmp_name'],$file)) {
                    // file upload successful
                } else {
                    echo '<div class="alert alert-danger" role="alert">Erreur lors du téléchargement de l\'image</div>';
                    return;
                }
            }
    
            if(!empty($Nom))
            {
                if(!empty($filename))
                {
                    $updated = Produit::editWhidImage($id,$Nom,$description,$qte,$prix,$discount,$id_categorie,$date,$filename);
                }
                else
                {
                    // Check if edit method exists
                    if (!method_exists('Produit', 'edit')) {
                        echo '<div class="alert alert-danger" role="alert">Méthode edit non trouvée</div>';
                        return;
                    }
    
                    // $updated = Produit::edit($id,$Nom,$description,$qte,$prix,$discount,$id_categorie,$date);
                }
    
                if($updated)
                {
                    echo '<div class="alert alert-success" role="alert">Bien modifié</div>';
                }
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert">Nom obligatoire</div>';
            }
        }
    }

    public function deleteProduct($id){
        Produit::delete($id);
        header('location: Product.php');
        
    }
}