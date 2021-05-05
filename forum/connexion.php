
<?php
session_start();
     
	 require 'requette/database.php';
  

	  $msg =  $email = $password   = "";
 
	 if(!empty($_POST)) 
	 {
		 $email        = checkInput($_POST['email']);
		 $password           = checkInput($_POST['password']); 
		 $password1          = md5( $password);
	
	
		 if($email != "" && $password != "") 
		 {
			 $db = Database::connect();
			 $statement = $db->prepare("select * from users where email=? and password=? ");
			 $statement->execute(array($email,$password1));
			 $count = $statement->rowCount();
             $tab=$statement->fetch(PDO::FETCH_ASSOC);
             if(count($tab)>0){
              
				$_SESSION['id']   = $tab['id'];
				$_SESSION['name']   = $tab['name'];
       			 $_SESSION['email'] = $tab['email'];
       			 $_SESSION['password'] = $tab['password'];

        		$_SESSION['picture'] = $tab['picture'];


             header("Location:profil.php");

             }
             else {
                $msg = "Invalid username and password!";

            }

			 Database::disconnect();
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
				<img src="images/co.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form" method="post" action="connexion.php" enctype="multipart/form-data">
            <a href="inscription.php"><button class="btn btn-primary" type="button">INSCRIPTION</button></a>
            <br>
            <br>

				<span class="contact1-form-title">
                <h1>COMMENCER</h1>
                

            <div>
            
            </div>

				
				</span>
                

			

				<div class="wrap-input1 validate-input" data-validate = "email is required">
					<input class="input1" type="email" name="email" placeholder="Entrez votre email">

					<span class="shadow-input1"></span>
				</div>

				

				<div class="wrap-input1 validate-input" data-validate = "password is required">
					<input class="input1" type="password" name="password" placeholder="Entrez votre mot  " required maxlength="8">


					<span class="loginMsg"><?php echo @$msg;?></span>

				</div>

			
				

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Se connecter
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
