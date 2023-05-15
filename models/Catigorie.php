<?php
require_once '../database/DB.php';
class Catigorie
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM categorie ');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function getCategorie($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM categorie WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $categorie = $stmt->fetch(PDO::FETCH_OBJ);
            return $categorie;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static function Add($libelle, $description, $date_creation)
    {
        $a = $libelle;
        $b = $description;
        $c = $date_creation;
        try {
            $sqlQuery = 'INSERT INTO categorie ( libelle, description,date_creation) 
            VALUES ( ?,?,? )';
            $stmt = DB::connect()->prepare($sqlQuery);
            if ($stmt->execute([$a, $b, $c,])) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }

    static function delete($id_categorie)
    {
        try {
            $deleteCatigorie = DB::connect()->prepare('DELETE FROM categorie WHERE id = :id');
            $delet = $deleteCatigorie->execute(['id' => $id_categorie]);
            if ($delet) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }

    static public function update($data)
    {
        
            try {

                $sql = "UPDATE categorie SET libelle = ?, description = ?, date_creation = ? WHERE id = ?";
                $stmt = DB::connect()->prepare($sql);
                $stmt->execute([$data['libelle'], $data['description'], $data['date_creation'], $data['id']]);
                header('Location: ../view/Catigorie.php');
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        
    }
}
