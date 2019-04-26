<?php
require('data.php');
session_start();
if(empty($_SESSION['id'])){
        header("location:connexion.php");
    }else{

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
  <link rel="stylesheet" type="text/css" href="css/test.css"> 
  <link rel="stylesheet" type="text/css" href="css/in.css"> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>


</head>
<body>
<nav>
<?php require('header.php'); ?>

</nav>
   
   	<div class="row" style="margin-top: 5%">
   		<?php
            $db = Database::connect();
            $req = $db->prepare("SELECT nom, contact ,localite FROM clients WHERE id = ?");
            $req->execute(array($_SESSION['id']));
            $item = $req->fetch();
            
      
          
           
        ?>
   		<div class="col-sm-3">
   		
        <div class="card  mb-3" style="max-width: 18rem; margin-left: 20%; height: 55%; position: fixed;z-index:1;margin-left: 0%;margin-top: 0%;background-color:rgba(133,139,134,0.7); color: blue;width: 25%">
  <div class="card-header" style="font-style: italic;background-color: #cbe5ff;color: black">profils utilisateur</div>
  <div class="card-body">
   <h5 class="card-title">NOM: <?php echo $item['nom']?></h5>
    <p class="card-text">CONTACT: <?php echo $item['contact']?></p>
    <p class="card-text">LOCALITE: <?php echo $item['localite']?></p>
    <section >
      <div class="alert alert-primary animated lightSpeedIn" style="text-align: center;"> menu</div>
    <a  style="color: rgba(23,23,23,1);font-size: 30Px;text-decoration: none;text-shadow: 1px 1px 1px white;" href="#Me">Menuiserie</a><br>
    <a style="color: rgba(23,23,23,1);font-size: 30Px;text-decoration: none;text-shadow: 1px 1px 1px white;" href="#Ma">MaÇonerie</a><br>
    <a  style="color: rgba(23,23,23,1);font-size: 30Px;text-decoration: none;text-shadow: 1px 1px 1px white;" href="#ec">Echaffaudage</a><br>
    <a  style="color: rgba(23,23,23,1);font-size: 30Px;text-decoration: none;text-shadow: 1px 1px 1px white;" href="#pl">plomberie</a><br>
    <a  style="color: rgba(23,23,23,1);font-size: 30Px;text-decoration: none;text-shadow: 1px 1px 1px white;" href="#et">Etancheïté</a><br>
     <a  class="btn btn-outline-primary" style="color: white;font-size: 30Px;text-decoration: none; margin-bottom: 10px"  href="deconnection.php">deconnection</a><br>
  <a class="btn btn-outline-primary" style="color: white;font-size: 30Px;text-decoration: none;" href="panier.php">commandes</a>


    </section>
  </div>
</div>	
 

   		</div>
  
   		<div class="col-sm-9">
  
  <?php
 $db = Database::connect();
 $req = $db->prepare('SELECT  * FROM articles WHERE categories = ? ' );
 $req->execute(array("menuiserie"));

?> 	
	<div class="alert alert-primary" style="text-align: center;text-transform: uppercase; margin-top: 10px; margin-bottom: 10px;"id="Me"> menuiserie</div> 		
   	 <div class="row" >
   	
    	<?php while ($item = $req->fetch()) { ?>

      <div class="col-sm-3">
   
        <div class="card">
		    <img src="css/img/<?php echo $item['image']?>" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title"><?php echo $item['nom_articles']?></h5>
		      <p class="card-text"><?php echo $item['prix_articles']?></p>
		      <p class="card-text"><?php echo $item['description']?></p>
		      <p class="card-text"><small class="text-muted"><?php echo $item['categories']?></small></p>
		      <a class="btn btn-outline-danger" href="traitement2.php?id=<?php echo $item['id']?>&prix=<?php echo $item['prix_articles']?>&nom=<?php echo $item['nom_articles']?>">commander</a>
    		</div>

  	  </div>
    </div> 
     <?php  } ?>
   </div>
   <?php
 $db = Database::connect();
 $req = $db->prepare('SELECT  * FROM articles WHERE categories = ? ' );
 $req->execute(array("maconnerie"));

?> 	
<div class="alert alert-primary" style="text-align: center;text-transform: uppercase;" id="Ma">maçonnerie</div> 
   	<div class="row" >
  			
    	<?php while ($item = $req->fetch()) { ?>
   		
      <div class="col-sm-3">
        <div class="card">
		    <img src="css/img/<?php echo $item['image']?>" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title"><?php echo $item['nom_articles']?></h5>
		      <p class="card-text"><?php echo $item['prix_articles']?> $</p>
		      <p class="card-text"><?php echo $item['description']?></p>
		      <p class="card-text"><small class="text-muted"><?php echo $item['categories']?></small></p>
		      <a class="btn btn-outline-danger" href="traitement2.php?id=<?php echo $item['id']?>&prix=<?php echo $item['prix_articles']?>&nom=<?php echo $item['nom_articles']?>">commander</a>
    		</div>

  	  </div>
    </div> 
     <?php  } ?>
   </div> 	

  <?php
 $db = Database::connect();
 $req = $db->prepare('SELECT  * FROM articles WHERE categories = ? ' );
 $req->execute(array("plomberie"));

?> 	
 		<div class="alert alert-primary" style="text-align: center;text-transform: uppercase;" id="pl">plomberie</div> 
   	<div class="row" >
  
    	<?php while ($item = $req->fetch()) { ?>
   		
      <div class="col-sm-3">
        <div class="card">
		    <img src="css/img/<?php echo $item['image']?>" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title"><?php echo $item['nom_articles']?></h5>
		      <p class="card-text"><?php echo $item['prix_articles']?></p>
		      <p class="card-text"><?php echo $item['description']?></p>
		      <p class="card-text"><small class="text-muted"><?php echo $item['categories']?></small></p>
		      <a class="btn btn-outline-danger" href="traitement2.php?id=<?php echo $item['id']?>&prix=<?php echo $item['prix_articles']?>&nom=<?php echo $item['nom_articles']?>">commander</a>
    		</div>

  	  </div>
    </div> 
     <?php  } ?>
   </div> 	

 <?php
 $db = Database::connect();
 $req = $db->prepare('SELECT  * FROM articles WHERE categories = ? ' );
 $req->execute(array("etancheite"));

?> 	
	<div class="alert alert-primary" style="text-align: center;text-transform: uppercase;" id="et"> etancheite</div> 
   	<div class="row" >
   
    	<?php while ($item = $req->fetch()) { ?>
    	
      <div class="col-sm-3">
        <div class="card">
		    <img src="css/img/<?php echo $item['image']?>" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title"><?php echo $item['nom_articles']?></h5>
		      <p class="card-text"><?php echo $item['prix_articles']?></p>
		      <p class="card-text"><?php echo $item['description']?></p>
		      <p class="card-text"><small class="text-muted"><?php echo $item['categories']?></small></p>
		      <a class="btn btn-outline-danger" href="traitement2.php?id=<?php echo $item['id']?>&prix=<?php echo $item['prix_articles']?>&nom=<?php echo $item['nom_articles']?>">commander</a>
    		</div>

  	  </div>
    </div> 
     <?php  } ?>
   </div> 	

 <?php
 $db = Database::connect();
 $req = $db->prepare('SELECT  * FROM articles WHERE categories = ? ' );
 $req->execute(array("echafaudage"));

?> 	
<div class="alert alert-primary" style="text-align: center; text-transform: uppercase;" id="ec">echafaudage</div> 
   	<div class="row" >
   			
    	<?php while ($item = $req->fetch()) { ?>
    	
      <div class="col-sm-3">
        <div class="card">
		    <img src="css/img/<?php echo $item['image']?>" class="card-img-top" alt="...">
		    <div class="card-body">
		      <h5 class="card-title"><?php echo $item['nom_articles']?></h5>
		      <p class="card-text"><?php echo $item['prix_articles']?></p>
		      <p class="card-text"><?php echo $item['description']?></p>
		      <p class="card-text"><small class="text-muted"><?php echo $item['categories']?></small></p>
		      <a class="btn btn-outline-danger" href="traitement2.php?id=<?php echo $item['id']?>&prix=<?php echo $item['prix_articles']?>&nom=<?php echo $item['nom_articles']?>">commander</a>
    		</div>

  	  </div>
    </div> 
     <?php  } ?>
   </div> 	

   		</div>
   	</div>
  

   <?php include 'footer.php'; ?>


</body>
</html>
<?php } ?>