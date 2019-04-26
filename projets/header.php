<DOCTYPE  ht5>
<html>
<head>

</head>

<title>phaniehome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta charset="utf-8">

  <link rel="stylesheet"type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/in.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script href="js/bootstrap.min.js"></script>
<script href="js/jquery.js"></script>
 
<body>
<div class="container-fluid">
  

<!-- <header style="background-image: url('css/img/h1.jpg');"> -->

<nav class="navbar navbar-expand-lg animated flipInX fixed-top">
  <p style="font-size: 30px" class="navbar-brand" href=""><strong style="">Phanie</strong>Home</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> 
  	
    <div class="navbar-nav " style="font-size:25px;font-weight: bold">
    	<a class="nav-item nav-link" href="index.php">acceuil <span class="sr-only">(current)</span></a>
    	<a class="nav-item nav-link " href="acheter.php">boutique <span class="sr-only">(current)</span></a>
     <button class="btn btn-outline-primary m-r-3" style="margin-right: 10px;"> <a style="font-weight: bold;font-size: 25Px" class="nav-item nav-link" href="inscription.php">inscription <span class="sr-only">(current)</span></a></button>
     <button class="btn btn-outline-primary m-l-3"> <a style="font-weight: bold;font-size: 25Px" class="nav-item nav-link" href="connexion.php">connection <span class="sr-only">(current)</span></a></button>
     
  </div> 
</div>
  </div>
  </nav>

<!-- </header> -->
</body>
</html>




<!-- <?php 

/**
 * Verifie si le panier existe, le créé sinon
 * @return booleen
 */
// function creationPanier(){
//    if (!isset($_SESSION['panier'])){
//       $_SESSION['panier']=array();
//       $_SESSION['panier']['libelleProduit'] = array();
//       $_SESSION['panier']['qteProduit'] = array();
//       $_SESSION['panier']['prixProduit'] = array();
//       $_SESSION['panier']['verrou'] = false;
//    }
//    return true;
// }


/**
 * Ajoute un article dans le panier
 * @param string $libelleProduit
 * @param int $qteProduit
 * @param float $prixProduit
 * @return void
 */
// function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

   //Si le panier existe
   // if (creationPanier() && !isVerrouille())
   // {
   //    //Si le produit existe déjà on ajoute seulement la quantité
   //    $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

   //    if ($positionProduit !== false)
   //    {
      //    $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
      // }
      // else
      // {
      //    //Sinon on ajoute le produit
      //    array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
      //    array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
      //    array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
      // }
   // }
//    else
//    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
// }



/**
 * Modifie la quantité d'un article
 * @param $libelleProduit
 * @param $qteProduit
 * @return void
 */
// function modifierQTeArticle($libelleProduit,$qteProduit){
//    //Si le panier éxiste
//    if (creationPanier() && !isVerrouille())
//    {
//       //Si la quantité est positive on modifie sinon on supprime l'article
      // if ($qteProduit > 0)
      // {
      //    //Recharche du produit dans le panier
      //    $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

      //    if ($positionProduit !== false)
      //    {
      //       $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
      //    }
      // }
      // else
      // supprimerArticle($libelleProduit);
//    }
//    else
//    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
// }

// /**
//  * Supprime un article du panier
//  * @param $libelleProduit
//  * @return unknown_type
//  */
// function supprimerArticle($libelleProduit){
//    //Si le panier existe
//    if (creationPanier() && !isVerrouille())
//    {
      //Nous allons passer par un panier temporaire
      // $tmp=array();
      // $tmp['libelleProduit'] = array();
      // $tmp['qteProduit'] = array();
      // $tmp['prixProduit'] = array();
      // $tmp['verrou'] = $_SESSION['panier']['verrou'];

      // for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
      // {
      //    if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
      //    {
      //       array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
      //       array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
      //       array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
      //    }

//       }
//       //On remplace le panier en session par notre panier temporaire à jour
//       $_SESSION['panier'] =  $tmp;
//       //On efface notre panier temporaire
//       unset($tmp);
//    }
//    else
//    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
// }


// /**
//  * Montant total du panier
//  * @return int
//  */
// function MontantGlobal(){
//    $total=0;
//    for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
//    {
//       $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
//    }
//    return $total;
// }


// /**
//  * Fonction de suppression du panier
//  * @return void
//  */
// function supprimePanier(){
//    unset($_SESSION['panier']);
// }

// /**
//  * Permet de savoir si le panier est verrouillé
//  * @return booleen
//  */
// function isVerrouille(){
//    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
//    return true;
//    else
//    return false;
// }

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
//  */
// function compterArticles()
// {
//    if (isset($_SESSION['panier']))
//    return count($_SESSION['panier']['libelleProduit']);
//    else
//    return 0;

// }

// ?>
//  -->
