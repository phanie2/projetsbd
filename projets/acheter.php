
<?php require('data.php');


 $db = Database::connect();
 $req = $db->query('SELECT  * FROM articles' );



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/in.css">


 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.4/jquery.min.js"></script>
<script type="text/javascript" src="in.js"></script>
</head>
<body>
<div class="container-fluid">
  

<?php require('header.php'); ?>
<!-- 
 -->
 <section style="margin-top: 10%;">
  <p class="alert alert-success" style="text-align: center;"> inscrivez-vous pour pouvoir faire des achats</p>
  <div class="container">
    <div class="row">
      <?php while ($item = $req->fetch()) { ?>
      <div class="col-sm-3">
        <div class="card">
    <img width="250" height="150" src="css/img/<?php echo $item['image']?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $item['nom_articles']?></h5>
      <p class="card-text">PRIX: <?php echo $item['prix_articles']?> francs</p>
      <p class="card-text"><?php echo $item['description']?></p>
      <p class="card-text"><small class="text-muted"><?php echo $item['categories']?></small></p>
      
    </div>
      </div>
    </div>
  <?php  } ?>
  </div>
  
  </div>
 </section>
</div>
<footer>
 <?php include('footer.php') ?>

</footer>
</body>
</html>

