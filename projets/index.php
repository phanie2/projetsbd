<!DOCTYPE html>
<html>
<head>
	<title>phaniehome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/in.css">


 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.4/jquery.min.js"></script>
<script type="text/javascript" src="js/in.js"></script>
</head>
<body>
<div class="container-fluid">
  

<header style="background-image: url('css/img/h1.jpg');">

 <?php require('header.php'); ?>
     
      

</header>
<!-- <section class="main-image">
  <img src="h1.jpg" width="100%" height="700">
</section> -->
<section class="circle">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img class="animated slideInLeft" src="css/img/c.jpg" width="350" height="300">
       <h3>MATERIAUX DE QUALITE</h3>
       <p>nos materiaux sont importés de l'occident</p>
      </div>
      <div class="col-sm-4">
        <img class="animated slideInDown" src="css/img/l.jpg" width="350" height="300">
        <h3>LIVRAISON GRATUITE</h3>
        <p>livraison et acheminement gratuite des marchandises</p>
      </div>
      <div class="col-sm-4">
        <img class="animated slideInRight" src="css/img/s.jpeg" width="350" height="300">
        <h3>SERVICES APRES VENTES</h3>
         <p> notre service apres vente pour repondre a vos preocupations </p>
      </div>
     
    </div>
  </div>
  </section>
<section class="marche">
  <div class="a">
   <center> <h4>comment Ça marche</h4></center>
  </div>
  
</section>

<section class="info">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="card">
                   <h5 class="card-header">Notre Agence</h5>
                     <div class="card-body">
  
                        <p class="card-text">PhanieHome vous offre la possibilte d'aquerir des materiaux de construction en ligne<br><br>

                      Notre Agence  est idéalement située à Abidjan, dans les commune de Cocody Adjamé et Koumassi<br><br>

                      Ce site propose nos offres en stationnements, materiaux de maçonnerie, menuiserie ,etancheite, plomberie et echaffaudage.</p>
   
                     </div>
                </div>
                <div class="row">
                 
                    
                
                </div>
                <div class="row" style="margin-top: 30px">
                	<div class="card-group" >
                       <div class="card">
                        <img src="css/img/ang.jpg" class="card-img-top" alt="..."  id="d" onmouseover="chan();" onmouseout="d();">
                          <div class="card-body">
                            <h5 class="card-title">COCODY</h5>
                              <h6>ANGREE</h6>
                                <p class="card-text" id="d1">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
     
                        </div>
                  </div>
                  <div class="card">
                  	  <img src="css/img/ad.jpg" class="card-img-top" alt="..."  id="e" onmouseover="cha();" onmouseout="e();">
                       <div class="card-body">
                            <h5 class="card-title ">ADJAME</h5>
                              <h6>LIBERTE</h6>
                                <p class="card-text" id="e1">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      
                          </div>
                          </div>
                <div class="card">
                    <img src="css/img/kou.jpg" class="card-img-top" alt="..." id="f" onmouseover="ch();" onmouseout="f();">
                       <div class="card-body">
                         <h5 class="card-title">KOUMASSI</h5>
                             <h6>GRAND CAREFOUR</h6>
                               <p class="card-text" id="f1">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       
                        </div>
                      </div>
                  </div>
                </div>
			</div>
			          <div class="col-sm-4">
				           <div class="container">
				           	 <div class="row">
				           	 	<div class="card border-primary mb-3" style="max-width: 18rem;">
 <div class="card-header">ACHETER NOS MATERIAUX</div>
  <div class="card-body text-primary">
   
     <img src="css/img/b.jpeg" width="100%" height="200"><br><br>
 <a href="acheter.php" class="btn btn-outline-danger " role="button">plus d'info</a>
  </div>
</div>
				           	 		
				           	 	</div>
				           	 	<div class="row">
				           	 	
                      				           	 		<div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">CONSTRUISER</div>
                        <div class="card-body text-primary">
                          
                          <img src="css/img/i2.jpg" width="100%" height="200"><br><br>
                       <a href=".section" class="btn btn-outline-danger " role="button">plus d'info</a>
                      </div>
				           	 	</div>
				           	 </div>
				           	 	<div class="row">
				           	 	<div class="card border-primary mb-3" style="max-width: 18rem;" id="p">
              <div class="card-header">CONTACT</div>
              <div class="card-body text-primary">
               
             <img src="css/img/i1.jpg" width="100%" height="200"><br><br>
             <a href="#footer" class="btn btn-outline-danger " role="button">plus d'info</a>
              </div>
            </div>
				           	 		
				           	 	</div>
				           	 </div>
				           </div>
			           </div>
		</div>
	</div>


</section>
</div>

<div id="footer">
  <?php include 'footer.php'; ?>
</div>

</body>
</html>