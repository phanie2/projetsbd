<?php 
require('data.php');
// session_start();
$isInscrit = false;

if(!empty($_POST)){
        $nom = securedata($_POST['Nom']);
        $localite = securedata($_POST['localite']);
        $mdp = securedata($_POST['code_u']);
        $contact = securedata($_POST['contact']);
        $valid = true;
        
        if(empty($nom)){
            $valid = false;
           
        }
        if(empty($localite)){
            $valid = false;
             
        }
        if(empty($mdp)){
            $valid = false;
            echo $mdp;
            

        }
        if(empty($contact)){
            $valid = false;
          
        }
        
        if($valid){
            $db = Database::connect();
            $req = $db->prepare("INSERT INTO clients (nom, mdp, localite, contact) VALUES (?,?,?,?)");
          $req->execute(array($nom,$mdp,$localite,$contact));
           
            Database::disconnect();
           header("location:connexion.php");
        } else{
         header("location:inscription.php");
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
 
  <link rel="stylesheet" type="text/css" href="css/ins.css"> 
  <link rel="stylesheet" type="text/css" href="css/in.css"> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>




</head>
<body id="ins" style="background:url(css/img/c2.jpeg) ;background-size: cover;  
    background-repeat: no-repeat;">
<?php require('header.php'); ?>
  
  <form method="post" action="inscription.php" style="margin-top: 25%;margin-bottom: 25%">

  <div class="container contact" id="cont">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">
        
        <h2>CLIENTS</h2>
        <h4> Inscrivez vous pour vous connecter a notre espace client</h4>
      </div>
    </div>
    <div class="col-md-9">

    
      <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname">Nom:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="fname" placeholder="Entrer votre nom" name="Nom">
          </div>
        </div>
       
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">localite:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="Entrer votre localite" name="localite">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-2" for="lname">code-utilisateur</label>
          <div class="col-sm-10">          
          <input type="password" class="form-control" id="lname" placeholder="code utilisateur" name="code_u">
          </div>
        </div>

          <div class="form-group">
          <label class="control-label col-sm-2" for="lname">conatct</label>
          <div class="col-sm-10">          
          <input type="tel" class="form-control" id="lname" placeholder="contact" name="contact">
          </div>
        </div>
       
     
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</form>

<?php require('footer.php') ?>
</body>
</html>