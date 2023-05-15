<?php 
        include '../controllers/CatigorieController.php';
        include '../controllers/ProduitController.php';
        $id_Product= $_POST['id_product'];
        $Produit = new ProduitController();
        $Produit->deleteProduct($id_Product);
?>