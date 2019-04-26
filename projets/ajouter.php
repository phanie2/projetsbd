
<?php
require('data.php');


if(!empty($_POST)){
        $nom_articles = securedata($_POST['nom_articles']);
        $prix_articles = securedata($_POST['prix_articles']);
        $image = securedata($_POST['image']);
        $categories = securedata($_POST['categories']);
         $descriptions = securedata($_POST['descriptions']);
        $valid = true;
        
        if(empty( $nom_articles)){
            $valid = false;
           
        }
        if(empty($prix_articles)){
            $valid = false;
             
        }
        if(empty($image)){
            $valid = false;
            echo $mdp;
            

        }
        if(empty($categories)){
            $valid = false;
          
        }
        if(empty($descriptions)){
            $valid = false;
          
        }
        
        if($valid){
            $db = Database::connect();
            $req = $db->prepare("INSERT INTO articles(nom_articles,prix_articles, image, categories, description) VALUES (?,?,?,?,?)");
          $req->execute(array(  $nom_articles, $prix_articles,  $image,  $categories,  $descriptions));
          
            Database::disconnect();
           header("location:acheter.php");
        } else{
          die('no valid');
        }
    }
   function securedata($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        return $data;
    }

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
<body style=" background-image:url(css/img/cle1.jpeg);
 background-size: cover;
 background-repeat: no-repeat; padding-top: 245px;">
	<nav class="navbar navbar-expand-lg  fixed-top">
  <p class="navbar-brand" href="#"><strong>Phanie</strong>Home</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
    
    <div class="navbar-nav">
      <a class="nav-item nav-link" style="font-weight: bold;font-size: 25Px"  href="index.php">acceuil<span class="sr-only">(current)</span></a>
     
      
       <button class="btn btn-outline-primary m-r-3" style="margin-right: 10px;"> <a style="font-weight: bold;font-size: 25Px" class="nav-item nav-link" href="admin.php">admin <span class="sr-only">(current)</span></a></button>
  </div>
</nav>

<form method="post" action="" style="margin-top: 10%; background-image: url('css/img/cle1.jpg'); margin-bottom: 10%">
  <div class="container contact" id="cont">
  <div class="row">
    <div class="col-sm-3" style="background-color: #58ACFA">
      <div class="contact-info">
        
        <h2>AJOUTER</h2>
        <h4> ajouter des elements dans la base de donnee</h4>
      </div>
    </div>
  
  <div class="col-sm-9" style=" background-color: white" >
  
    
      <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname"  style="font-weight: bold;color: black;font-size: 20px;text-shadow: 1px 1px 2px white">Nom_articles</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="fname" placeholder=" nom" name="nom_articles">
          </div>
        </div>
       
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname" style="font-weight: bold;color: black;font-size: 20px;text-shadow: 1px 1px 2px white">prix_articles</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="prix" name="prix_articles">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-2" for="lname"  style="font-weight: bold;color: black;font-size: 20px;text-shadow: 1px 1px 2px white">Image</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="image" name="image">
          </div>
        </div>

          <div class="form-group">
          <label class="control-label col-sm-2" for="lname"  style="font-weight: bold;color: black;font-size: 20px;text-shadow: 1px 1px 2px white">Categorie</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="categories" name="categories">
          </div>
        </div>

       <div class="form-group">
          <label class="control-label col-sm-2" for="lname"  style="font-weight: bold;color: black;font-size:20px;text-shadow: 1px 1px 2px white">Description</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="descriptions" name="descriptions">
          </div>
        </div>
     
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-dark">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </form>
<?php require 'footer.php'; ?>

</html>