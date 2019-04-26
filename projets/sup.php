<?php
 require('data.php');

echo $_GET['id'];

$db= Database::connect();
$req=$db->prepare("DELETE FROM `panier` WHERE id = ".$_GET['id']."");
$req->execute(array($_GET['id']));
 header("location:panier.php")
 ?>