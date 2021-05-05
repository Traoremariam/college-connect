<?php
     
	 require 'requette/database.php';
  
	 $nameError = $subjectError = $messageError  = $imageError = $name = $subject = $message  = $image = "";
 
	 if(!empty($_POST)) 
	 {
		 $name               = checkInput($_POST['name']);
		 $subject        = checkInput($_POST['subject']);
		 $message           = checkInput($_POST['message']); 
		 $image              = checkInput($_FILES["image"]["name"]);
		 $imagePath          = 'file/'. basename($image);
		 $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
		 $isSuccess          = true;
		 $isUploadSuccess    = false;
		 
		 if(empty($name)) 
		 {
			 $nameError = 'Ce champ ne peut pas être vide';
			 $isSuccess = false;
		 }
		 if(empty($subject)) 
		 {
			 $subjectError = 'Ce champ ne peut pas être vide';
			 $isSuccess = false;
		 } 
		 if(empty($message)) 
		 {
			 $messageError = 'Ce champ ne peut pas être vide';
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
			 if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" ) 
			 {
				 $imageError = "Les fichiers autorises sont: .jpg, .jpeg, .png, .gif";
				 $isUploadSuccess = false;
			 }
			 if(file_exists($imagePath)) 
			 {
				 $imageError = "Le fichier existe deja";
				 $isUploadSuccess = false;
			 }
			 if($_FILES["image"]["size"] > 500000) 
			 {
				 $imageError = "Le fichier ne doit pas depasser les 500KB";
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
			 $statement = $db->prepare("INSERT INTO `sujet`(`auteur`, `titre`, `text`, `fichier`) values(?, ?, ?, ?)");
			 $statement->execute(array($name,$subject,$message,$image));
			 Database::disconnect();
			 header("Location: ../index.php");
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



