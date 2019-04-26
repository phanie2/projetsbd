<?php 
require('data.php');


 $db = Database::connect();
 $req = $db->prepare("SELECT id, nom_articles, prix_articles, image, categories, description FROM articles  " );
 $req->execute(array());
 

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
<body style="background-image: url('css/img/d.jpeg');background-repeat: no-repeat;background-size: cover;">
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
<div class="container animated fadeInDown">
  

<table class="table" style="margin-top: 10%;background-color: white;border-radius: 10px;margin-bottom: 10%">

 
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom_articles</th>
      <th scope="col">prix_artclices</th>
         <th scope="col">voir</th>
      <th scope="col">categorie</th>
       <th scope="col">description</th>
        <th scope="col">modifier</th>
         <th scope="col">suprimer</th>
    </tr>
  </thead>
  <tbody>
      <?php while($item = $req->fetch()){ ?>  
    <tr>
   
      <th scope="row"><?php echo $item['id']?></th>
      <td><?php echo $item['nom_articles']?></td>
      <td><?php echo $item['prix_articles']?> </td>
      <td><img src="css/img/<?php echo $item['image']?>"width="100" height="100"></td>
      <td><?php echo $item['categories']?></td>
      <td><?php echo $item['description']?></td>
      <td><button  class="btn btn-outline-success"><a  methode="get" action="admin.php" href="traitement.php?id=<?php echo $item['id']?>">modifier</a></button>  </td>
      <td><a  methode="get" action="admin.php" href="delete.php?id=<?php echo $item['id']?>"  class="btn-outline-danger">&#10060;</a> </td>
    </tr>
     <?php  } ?>
    <tr>
      
  </tbody>

</table>
</div>
<?php require 'footer.php'; ?>
</body>
</html>