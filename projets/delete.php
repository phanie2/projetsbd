<?php
  require('data.php');
if(isset ($_GET)){
   
$db= Database:: connect();
$req= $db->prepare("DELETE FROM `articles` WHERE id=".$_GET['id']."");
$req->execute(array());
header("location:admin.php");
} 

?>