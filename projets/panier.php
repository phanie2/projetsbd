
<?php 
require ('data.php');
session_start();
if(empty($_SESSION['id'])){
        header("location:connexion.php");
    }else{

 $db =  Database::connect();
 $req= $db->prepare("SELECT `id`,`nom_articles`, `prix_articles` FROM `panier` WHERE id_client=".$_SESSION['id']." ");
$req->execute(array($_SESSION['id']));

 

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
<body>
<?php require('header.php'); ?>
<div class="container">
  <div class="row" style="margin-top: 30%;">
    <div class="col-sm-9">
      <table border="2" height="400" width="700" style="text-align: center">
    <thead style="margin-bottom: 20Px">
    <tr>
      <th scope="col">articles N°</th>
      <th scope="col">articles</th>
    
      <th scope="col">prix</th>
      <th>retirer</th>
    </tr>
  </thead>
  <tbody>

     <?php while($item = $req->fetch()){ ?>  
    <tr>
     <th scope="row"><?php echo$item['id'] ?></th>
      <td><?php echo $item['nom_articles']?></td>
   
      <td><?php echo $item['prix_articles']?> $ </td>
       <td><a href="sup.php?id=<?php echo $item['id']?>"class="btn-outline-danger" type="button" method="get" action="">  &#10060;</a></td>
  </tr>

<?php  } ?>
 
  <?php
  $db =  Database::connect();
 $req= $db->prepare("SELECT SUM(`prix_articles`)  as prix_total FROM `panier` WHERE id_client=".$_SESSION['id']." ");
$req->execute(array($_SESSION['id']));
$item = $req->fetch();

?>
   
<tr>
  <th scope="row">total</th>
      <td> ------------ </td>
 <td><?php echo $item['prix_total']?> $</td>
      <td></td>
     
</tr>

  </tbody>
  </table>
  
    </div>
    <div class="col-sm-3">
      <section > 
  <h4>valider la commande</h4>
  <a href="secret.php?prix=<?php echo $item['prix_total']?>" style="font-size: 50px; text-align: center" method="get">&#10003;</a>
<br><br>
<button class="btn btn-danger"><a href="test.php">retour</a></button>
</section>
    </div>
  </div>
</div>
  
  
  
</body>
</html>
<?php  } ?>