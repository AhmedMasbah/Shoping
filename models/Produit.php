<?php
require_once '../database/DB.php';

class Produit{
    static public function getAll() {
        $stmt= DB::connect()->prepare('SELECT a.id, a.Nom, a.description, a.prix,a.discount, b.libelle, a.date_creation, a.image FROM article a INNER JOIN categorie b ON a.id_categorie= b.id');
        $stmt->execute();
        return $stmt->fetchAll();

    }


    static function getProduit($data){
        $id=$data['id'];
        try{
        $query = 'SELECT * FROM article WHERE id=:id';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(":id"=> $id));
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }catch (PDOException $e){
        echo "error".$e->getMessage();
    }
    }

    static function getAllProduitByID($name){
        try{
        $stmt= DB::connect()->prepare("SELECT a.id, a.Nom, a.description, a.prix,a.discount, b.libelle, a.date_creation, a.image FROM article a INNER JOIN categorie b ON a.id_categorie= b.id_cat WHERE b.libelle =? ");
        $stmt->execute(array($name));
        return $stmt->fetchAll();
        }catch (PDOException $e){
        echo "error".$e->getMessage();
        }   
    }

    static function Add($Nom,$description,$qte,$prix,$discount,$id_categorie,$date_creation,$image){
        $a=$Nom;
        $b=$description ;
        $c=$qte;
        $d=$prix;
        $e=$discount;
        $f=$id_categorie;
        $h=$date_creation;
        $i=$image;

        try{
            $sqlQuery = 'INSERT INTO article ( Nom, description,qte,prix,discount,id_categorie, date_creation,image) 
            VALUES ( ?,?,?,?,?,?,?,? )';
            $stmt= DB::connect()->prepare($sqlQuery);
            if($stmt->execute([$a,$b,$c,$d,$e,$f,$h,$i]))
            {
                return true;
            }
            else{
                return false;
            }
        }catch (PDOException $e){
            echo "error".$e->getMessage();
        }   
    }
  

    static function editWhidImage($id, $Nom, $description, $qte, $prix, $discount, $id_categorie, $date_creation, $image){
        try {
            $query = "UPDATE article SET Nom=?, description=?, qte=?, prix=?, discount=?, id_categorie=?, date_creation=?, image=? WHERE id=?";
            $stmt = DB::connect()->prepare($query);
            $updated = $stmt->execute([$Nom, $description, $qte, $prix, $discount, $id_categorie, $date_creation, $image, $id]);
            if (!$updated) {
                throw new Exception('Erreur lors de la mise à jour de l\'article');
            }
            return $updated;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    static function delete($id_Product){
       
        try
        {
            $query= " DELETE FROM article WHERE id=? ";
            $stmt= DB::connect()->prepare($query);
            $delet=$stmt->execute([$id_Product]);
            
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