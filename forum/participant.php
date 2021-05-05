
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=m, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>college connect</title>
</head>
<body > 





                         

<?php
                        require 'requette/database.php';
                        $db = Database::connect();
                        $profil = $db->query('SELECT * FROM `users`');

                        while($pp= $profil->fetch()) 
                        
                        {
                            
                         

?>
<br>


      </div>










      <div class="container overflow-hidden">
      
  <div class="row gy-5">
    <div class="col-2">
      <div class="p-3 border bg-primary">
      
      
      
      
      
      <div class="col-md-8">
                            <div class="card-body">
                                <table>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $pp['name'];?></td>


                                        </tr>
                                        <tr>
                                        </tr>
                                        <tr>
                                        
                                            <br>
                                            <td><?php echo '<a class="btn btn-primary" href="profil.php?id='.$pp['id'].'"><span  class="glyphicon glyphicon-eye-open"  ></span> AJOUTER</a>';?></td>

                                        </tr>
                                        <img  style="width: 100px; height:100px" class="rounded-circle" alt="100x100" src="photo/<?php echo $pp['picture']; ?>"
          data-holder-rendered="true">
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
      
      
      
      
      
      
      
      </div>
    </div>
         </div>
    </div>


















<?php



                        }
                        Database::disconnect();
?>


</body>
</html>
