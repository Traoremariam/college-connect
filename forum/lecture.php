<?php

	 require 'requette/database.php';


    if(!empty($_GET['id'])) 
    {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT * FROM `sujet` WHERE id='$id' ");

    $statement->execute(array($id));
    $item = $statement->fetch();
    Database::disconnect();

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title>College Connect</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <br>
                    <form>
                      <div class="form-group">
                        <label>TIRE:</label><?php echo '  '.$item['titre'];?>
                      </div>
                      <div class="form-group">
                        <label>Description:</label><?php echo '  '.$item['text'];?>
                      </div>
                      
                      
                      <div class="form-group">
                      </div>
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="../one.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                    <iframe style="width:100%"; height="700px" src="file/<?php echo $item['fichier']; ?>"></iframe>
                        
                    </div>
                </div>
                 





                
            </div>
        </div>   
<center>
 <div class="input-group">
  <span class="input-group-text">commentez</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
</center>    
    </body>
</html>

