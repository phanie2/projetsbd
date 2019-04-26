<?php

require('data.php');

 if(!empty($_POST)){
        $nom =$_POST['nom'];
        $mdp = $_POST['mdp'];
        $valid = true;
        
        if(empty($nom)){
            $valid = false;
            
        }
        if(empty($mdp)){
            $valid = false;
         
        }
        
        if($valid){
            $db = Database::connect();
            $req = $db->prepare("SELECT * FROM clients WHERE nom = ? AND mdp = ?");
            $req->execute(array($nom, $mdp));

            if ($item = $req->fetch()){
                session_start();
                $_SESSION['id'] = $item['id'];


               
                header("Location:test.php");
               
            }else{
                header("Location:connexion.php");

            }
        } 
    }


 ?>







<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/connexion.css"> 
 <link rel="stylesheet" type="text/css" href="css/in.css"> 




<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>




</head>
<body style="background:url(css/img/c2.jpeg);background-size: cover;  
    background-repeat: no-repeat;
    ">

  
<?php require('header.php'); ?>
  
<section class="login-block" >
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Connexion Client</h2>
        <form class="login-form" method="post" action="connexion.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">login</label>
    <input type="text" class="form-control" placeholder="" name="nom">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="" name="mdp">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Se rappeler de moi</small>
    </label>
    <button type="submit" class="btn btn-login float-right">Se connecter</button>
  </div>
  
</form>

    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="css/img/cle1.jpeg" alt="First slide" id="image1">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Espace client</h2>
            <p>connectez vous pour effectuer des achats</p>
        </div>  
 
    </div>
  </div>
            </div>     
        
    </div>
  </div>
</div>
</div>
</section>



<!-- <footer >
  
      <p style="text-align: center" id="ta"><strong>Phanie</strong>Home</p>
       <button style="border-radius: 40%; margin-left: 45%" class="btn btn-outline-primary " role="button">f</button> 
       <button  style="border-radius: 40% ; " class="btn btn-outline-light " role="button">in</button> 
       <button  style="border-radius: 40%;margin-right: 40%" class="btn btn-outline-success " role="button">t</button> 
     


</footer> -->
</body>
</html>