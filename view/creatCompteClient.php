<?php 
include '../controllers/ClientController.php';
include '../controllers/UtilisateurController.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Sign Up Form</title>
    </head>
    <body>

	<?php 
         
         if(isset($_POST['logged']) && $_POST['logged']>0){
            header('Location:../index.php');
         }
        if(isset($_POST['submit'])){
        $regester = new ClientController();
        $regester->register();
        }
        ?>
 
    <div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Create Compte Client</div>
				<div class="card-body bg-light">
					
					<form method="post">
						<div class="form-group">
							<label for="name">Name*</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom" id="name">
						</div>
						<div class="form-group">
							<label for="name">Prénom*</label>
							<input type="text" name="prenom" class="form-control" placeholder="Prénom" id="name">
						</div>
						<div class="form-group">
							<label for="name">Login*</label>
							<input type="text" name="login_cle" class="form-control" placeholder="Login" id="name">
						</div>
						<div class="form-group">
							<label for="name">Telephone*</label>
							<input type="number" name="telephone" class="form-control" placeholder="Telephone" id="name">
						</div>
						<div class="form-group">
							<label for="mail">Email*</label>
							<input type="email" name="email" class="form-control" placeholder="email" id="mail">
						</div>
						<div class="form-group">
							<label for="passwoed">Password*</label>
							<input type="password" name="pass_cle" class="form-control" id="password">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Connecter</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
      
    </body>
</html>
