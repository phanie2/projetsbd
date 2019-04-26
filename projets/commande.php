<?php 
 require('data.php');
 

$db = Database::connect();
$req = $db ->prepare("SELECT DISTINCT(id_client) FROM `commande`  ORDER BY dates");
  $req -> execute(array());
// $db = Database::connect();
// $req = $db ->prepare("SELECT  `id_client`, `prix` FROM `commandees` WHERE ");
//   $req -> execute(array($id));

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
  <link rel="stylesheet" type="text/css" href="css/in.css"> 
  <link rel="stylesheet" type="text/css" href="css/admin.css"> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

 </head>
 <body style="background-image: url('css/img/d.jpeg');background-repeat: no-repeat;background-size: cover">
<nav class="navbar navbar-expand-lg  fixed-top">
  <p class="navbar-brand" href="#"><strong>Phanie</strong>Home</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
    
    <div class="navbar-nav">
      <a class="nav-item nav-link" style="font-weight: bold;font-size: 25Px"  href="#">acceuil<span class="sr-only">(current)</span></a>
     
     <a style="font-weight: bold;font-size: 25Px" class="nav-item nav-link" href="ajouter.php">ajouter <span class="sr-only">(current)</span></a>
     <a style="font-weight: bold;font-size: 25Px" class="nav-item nav-link" href="commande.php">commande <span class="sr-only">(current)</span></a>
  </div>
</nav>
 <div class="container">
 	

 <table class="table" style="margin-top: 10%;background-color: white;border-radius: 10px">
  <thead>
    <tr>
       <th scope="col">N°</th> 
     <th scope="col">date</th>
      <th scope="col">Articles</th>
      
    </tr>
  </thead>
  <?php	
 
 while ($item = $req -> fetch()){ 
?>
  <tbody>
    <tr> 
    	 <?php
 					$re = $db ->query(" SELECT * FROM `commande` WHERE id_client=".$item['id_client']." ORDER BY dates DESC;");

 				 while ($it = $re -> fetch()) {?>
  					
        <th scope="row"> <?php echo $item['id_client'] ?></th> 
      
  				
       <td><?php echo $it['dates']; ?></td>
       <td><?php echo $it['nom_articles']; ?></td>
    </tr><?php } ?>
	    <?php  } ?>
  </tbody>
</table>
 	 </div>
 			
 	<div> <?php require'footer.php'; ?></div>
 </body>
 </html>