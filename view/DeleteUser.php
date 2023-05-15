<?php     
  include '../controllers/UtilisateurController.php';

        $id_user= $_POST['id_user'];
        $user = new UtilisateurController();
        $user->deleteUser($id_user);
?>