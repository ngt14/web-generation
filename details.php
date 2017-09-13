<html>
  <head>
    <title>Web-G&eacute;n&eacute;ration</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="script.js"></script>
  </head>
  <body>
	<?php include 'header.php';
		$choix = $_GET['choix'];
		if($choix == "s"){
	?>
	
	<section style="background-color: rgba(0, 0, 0, 0.5); color:white;">
      <div class="container" >
        <div class="row">
          <div class="col-sm-8 col-md-6 animated slideInLeft">
            <div class="row">
              <div class="col-lg-8">
                <h2>Gamme standard</h2>
              </div><!--col-->
            </div><!--row-->
            <h3>
              Vous avez fait le choix de la <strong>gamme standard</strong>
            </h3>
            <h4>
              Grace &agrave; cette gamme, vous vous offrez un site cl&egrave; en main afin de promouvoir votre entreprise
            </h4>
			<h4>
				De 1 &agrave; 3 pages choissiez ce qui vous convient.
			</h4>
			<h4>
				Dans cette gamme, vous pouvez personnaliser votre site du début à la fin, vous serez un acteur principal de la cr&eacute;ation. Choissisez le nombre de pages que vous desirez, les images voulues, le texte...etc. <strong>c'est votre site</strong>
			</h4>
			<h4>
				Faites une demande de devis en ligne en moins de 5min et recevez-le rapidement par mail. 
			</h4>
			<h4>
				<a href="devis.php?choix=s"><button type="button" class="btn btn-secondary">Faire mon devis</button></a>
			</h4>
		  </div><!--col-->
        </div><!--row-->
      </div><!--container-->
    </section>
	
	<?php }else{?>
	
	<section style="background-color: rgba(0, 0, 0, 0.5); color:white;">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-6 animated slideInLeft">
            <div class="row">
              <div class="col-lg-8">
                <h2>Gamme standard</h2>
              </div><!--col-->
            </div><!--row-->
            <h3>
              Vous avez fait le choix de la <strong>gamme premium</strong>
            </h3>
            <h4>
              Grace &agrave; cette gamme, vous vous offrez un site cl&egrave; en main afin de promouvoir votre entreprise
            </h4>
			<h4>
				Avec un nombre de pages ilimité
			</h4>
			<h4>
				Dans cette gamme, vous pouvez personnaliser votre site du début à la fin, vous serez un acteur principal de la cr&eacute;ation. Vous pourrez ajouter des pages, des modules type "Contacter-nous" ou toutes autre chose.
			</h4>
			<h4>
				Faites une demande de devis en ligne en moins de 5min et recevez-le rapidement par mail. 
			</h4>
			<h4>
				<a href="devis.php?choix=s"><button type="button" class="btn btn-secondary">Faire mon devis</button></a>
			</h4>
		  </div><!--col-->
        </div><!--row-->
      </div><!--container-->
    </section>
	
	<?php } ?>
  </body>
</html>