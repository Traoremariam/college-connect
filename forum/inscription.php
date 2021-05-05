

<?php
     
	 require 'requette/database.php';
  
	 $nameError = $emailError = $passwordError  = $imageError = $name = $email = $password  = $image = "";
 
	 if(!empty($_POST)) 
	 {
		 $name               = checkInput($_POST['name']);
		 $email        = checkInput($_POST['email']);
		 $password           = checkInput($_POST['password']); 
		 $password1          = md5( $password);
		 $image              = checkInput($_FILES["image"]["name"]);
		 $imagePath          = 'photo/'. basename($image);
		 $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
		 $isSuccess          = true;
		 $isUploadSuccess    = false;
		 
		 if(empty($name)) 
		 {
			 $nameError = 'Ce champ ne peut pas être vide';
			 $isSuccess = false;
		 }
		 if(empty($email)) 
		 {
			 $emailError = 'Ce champ ne peut pas être vide';
			 $isSuccess = false;
		 } 
		 if(empty($password)) 
		 {
			 $passwordError = 'Ce champ ne peut pas être vide';
			 $isSuccess = false;
		 } 
		
		 if(empty($image)) 
		 {
			 $imageError = 'Ce champ ne peut pas être vide';
			 $isSuccess = false;
		 }
		 else
		 {
			 $isUploadSuccess = true;
			 if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg") 
			 {
				 $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png";
				 $isUploadSuccess = false;
			 }
			 
			
			 if($isUploadSuccess) 
			 {
				 if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
				 {
					 $imageError = "Il y a eu une erreur lors de l'upload";
					 $isUploadSuccess = false;
				 } 
			 } 
		 }
		 
		 if($isSuccess && $isUploadSuccess) 
		 {
			 $db = Database::connect();
			 $statement = $db->prepare("INSERT INTO `users`( `name`, `email`, `password`, `picture`)values(?, ?, ?, ?)");
			 $statement->execute(array($name,$email,$password1,$image));
			 Database::disconnect();
			 header("Location: connexion.php");
		 }
	 }
 
	 function checkInput($data) 
	 {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	 }
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>College connect</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/etud.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="post" action="inscription.php" enctype="multipart/form-data">
            <a href="connexion.php"><button class="btn btn-primary" type="button">CONNECTER VOUS</button></a>
            <br>
            <br>

				<span class="contact1-form-title">
                <h1>COMMENCER</h1>
				
				</span>
                
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="votre nom">
					<span class="help-inline"><?php echo $nameError;?></span>

					<span class="shadow-input1"></span>
				</div>

			

				<div class="wrap-input1 validate-input" data-validate = "email is required">
					<input class="input1" type="email" name="email" placeholder="Entrez votre email">
					<span class="help-inline"><?php echo $emailError;?></span>

					<span class="shadow-input1"></span>
				</div>

				

				<div class="wrap-input1 validate-input" data-validate = "password is required">
					<input class="input1" type="password" name="password" placeholder="Entrez votre mot de passe" required maxlength="8">

					<span class="help-inline"><?php echo $passwordError;?></span>

					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "file is required">
					<input class="input1" type="file" name="image" placeholder="Ajouter un fichier">
					<span class="help-inline"><?php echo $imageError;?></span>

					<span class="shadow-input1"></span>
				</div>
				

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Envoyer
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                        
					</button>
                    
				</div>
			</form>
            <div class="form-actions">
                      <a class="btn btn-primary" href="../index.html"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
             </div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
