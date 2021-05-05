
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
<div>





</div>
  </div>
</nav>

<br>
<div class="row">
  <div >
    
  </div>


  <marquee style="font-size: 25px; font-family:cursive; font-weight:bold ; color:#03C4EB" ; >  AJOUTER DE NOUVEAUX AMIS  ET   VOIR L'ACTUALITE </span></marquee>



                         

<?php
                        require 'forum/requette/database.php';
                        $db = Database::connect();

                        $statement = $db->query('SELECT * FROM `sujet`ORDER BY id DESC');
                        
                        while($item= $statement->fetch()) 
                        {
                            
                         

?>
<br>


      </div>










      <div class="container overflow-hidden">
      
  
    <div class="col-8">
      <div class="p-3 border bg-light">
      
      
      
      
      
      <div class="card-body">
                               
      <table>
                                <tbody>
                                    <tr>

 									<td ><iframe src="forum/file/<?php echo $item['fichier']; ?>"></iframe></td>

                                    </tr>
                                </tbody>
                            </table>
                                <table>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $item['titre'];?></td>
                                        

                                        </tr>
                                        <tr>
                                        <td><?php echo $item['description'];?></td>

                                        </tr>
                                        <tr>
                                        
                                            <br>
                                            <td><?php echo '<a class="btn btn-primary" href="forum/lecture.php?id='.$item['id'].'"><span  class="glyphicon glyphicon-eye-open"  ></span> Voir plus</a>';?></td>

                                        </tr>
                                           
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
      
      
      
      
      </div>
    </div>


















<?php



                        }
                        Database::disconnect();
?>


</body>
</html>
