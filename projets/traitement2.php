<?php
require('data.php');
session_start();
if(empty($_SESSION['id'])){
        header("location:connexion.php");
    }else{

// echo $_GET['prix']
    	$dates = date("Y-m-d ");

$nom=$_GET['nom'];
$prix=$_GET['prix'];
$id=$_GET['id'];
 $db =  Database::connect();
 $req= $db->prepare("INSERT INTO panier (nom_articles, prix_articles, id_articles,id_client) VALUES (?,?,? ,?) ");
$req->execute(array($nom,$prix,$id,$_SESSION['id']));

  $db =  Database::connect();
 $req= $db->prepare("INSERT INTO commande( dates,nom_articles, prix_articles,id_client) VALUES (?,?,?,?) ");
$req->execute(array($dates,$nom,$prix,$_SESSION['id']));

header("location:test.php");


 
 } ?>
