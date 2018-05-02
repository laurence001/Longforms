<?php 
	require_once('header.php'); 
?>
		<link rel="stylesheet" href="css/rouge.css">
		<script src="js/inc/modernizr.custom.js"></script>
		<style>#networks,.navbar-right{display:none;}</style>
    </head>
		
    <body class="chapitre animated fadeIn page">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
        <?php $titre = "Ici le titre de la page"; 
		
			require_once('navbar.php'); ?>
		
		<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 main-article apropos" id="ssl">
			
			<div id="logohome" style="padding-top:10px;text-align:center;">
			   
			   <img src="images/error.png" style="max-width:200px;height:auto;" alt="Page non trouvée" />
			   
			   <h2>Titre de l'erreur</h2>
			   
			   <a href="index"><button class="btn">Revenir à la page d'accueil</button></a>
			   
			</div>
					
		</div>

		<?php include('inc/scripts.php'); ?>
    </body>
</html>