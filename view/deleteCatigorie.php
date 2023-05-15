<?php 
        include '../controllers/CatigorieController.php';
        $id_Catigorie= $_POST['id_Catigorie'];
        $categorie = new CatigorieController();
        $categorie->deleteCartigorie($id_Catigorie);
?>