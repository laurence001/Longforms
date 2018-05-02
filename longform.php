<?php 
	require_once('header.php');
?>
		<link rel="stylesheet" href="css/rouge.css">
    </head>
		
    <body class="article longform animated fadeIn">
         <!--[if lte IE 9]>
            <p class="browserupgrade">Vous utilisez une version <strong>obsolète</strong> de votre navigateur. Veuillez procéder à <a href="https://browsehappy.com/">une mise à jour</a> pour améliorer votre expérience et votre sécurité.</p>
        <![endif]-->
		
		<div id="loader"> 
			<div id="inner"> 
				<?php // Ici le contenu du loader ?>
			</div>
		</div>
		
		<?php //Progress bar ?>
		<div id="progression">
			<div id="barre"></div>
		</div>

       <?php include('navbar.php'); ?>
		
	  <?php //Navigation intrapage ?>
	   <nav id="scroll">
			<ul role="tablist" class="nav">
				<li><a href="#topage" class="scrollTo"><span class="ion ion-android-radio-button-on"  data-toggle="tooltip" data-placement="right" title="Ici titre de la section"></span></a></li>
				<li><a href="#section1" class="scrollTo"><span class="ion ion-android-radio-button-on"  data-toggle="tooltip" data-placement="right" title="Ici titre de la section"></span></a></li>
				<li><a href="#section2" class="scrollTo"><span class="ion ion-android-radio-button-on"  data-toggle="tooltip" data-placement="right" title="Ici titre de la section"></span></a></li>
				<li><a href="#section3" class="scrollTo"><span class="ion ion-android-radio-button-on"  data-toggle="tooltip" data-placement="right" title="Ici titre de la section"></span></a></li>
				<li><a href="#section4" class="scrollTo"><span class="ion ion-android-radio-button-on"  data-toggle="tooltip" data-placement="right" title="Ici titre de la section"></span></a></li>
				<li><a href="#section5" class="scrollTo"><span class="ion ion-android-radio-button-on"  data-toggle="tooltip" data-placement="right" title="Ici titre de la section"></span></a></li>
		    </ul>
	   </nav>
	   
		<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12 main-article">
			<span class="anchor" id="topage"></span>
				<h4 id="at" style="margin-top: 0!important;"><span>Avant-titre</span></h4>
					
					<h1>Titre</h1>
					
					<div id="auteurs">Auteurs</div>
					
					<h3 id="lead">
						Chapeau
					</h3>
					
					<span class="anchor" id="section1"></span>					
					<h2>Titre section 1</h2>
					
					<p>
						Texte
					</p>
					
					
			<span class="anchor" id="section2"></span>
				
				<h2>Titre section 2</h2>
						
						<p>
						
							Texte
							
						</p>
							
				<div class="panel">
					<h2 style="margin-top:0!important;margin-bottom:-20px;">Titre encadré</h2>
					
					<img src="images/xxx.jpg" alt="xxx"/>
					
					<div class="leg" style="margin-top:-20px;">Légende photo dans encadré</div>
					
					<p>
					
				</div>
					
					<span class="anchor" id="section3"></span>
					<h2>Titre section 3</h2>
					
					<p>
						Texte
					</p>
					
					<?php // A répéter en fonction du nombre de sections nécessaires ?>
		</div>
		
<?php include('footer.php'); ?>

	<!-- Scroll to top -->		
		<div id="up">
			<span class="ion ion-android-arrow-up"></span>
		</div>
		
		
		<?php include('inc/scripts.php'); ?>
    </body>
</html>