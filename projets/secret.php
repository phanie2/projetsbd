
  <?php
  session_start();
 require('data.php');

  if(!empty($_GET)){

  $dates = date("Y-m-d H:i:s");

  $id = $_SESSION['id'];
  $prix = $_GET['prix'];
   

  
$db = Database::connect();
 $req = $db->prepare("INSERT INTO `commandees`( `dates`, `id_client`, `prix`) VALUES (?,?,? ) " );
   $req->execute(array($dates,$id,$prix));  

$db = Database::connect();
 $req = $db->prepare("DELETE FROM `panier` WHERE id_client=$id");
   $req->execute(array($id));   
 header("location:panier.php");
// $item = $req->fetch();

    }

    ?>

