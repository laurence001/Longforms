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
			<h4 id="at" style="margin-top: 0!important;"><span><?php echo $chapitre3; ?></span></h4>
					
				<h1>Titre</h1>
					
				<div id="auteurs">Auteurs</div>
					
				<h3 id="lead" style="margin-bottom:-30px;">
					Chapeau / Intro
				</h3>
				
		</div>	
			
			<span class="anchor" id="section1"></span>
			<section id="s1">
				<div id="pix1" class="pix parallax-window" data-parallax="scroll" data-image-src="images/monimage.jpg">
					
				</div>
				<div class="legende">
					Légende de l'image
				</div>
					<div class="col-lg-8 main-article sectionlf">
						<h2><span>Titre de la section</span></h2>	
						
						<p>
							Texte
						</p>
					</div>
			</section>
				
			<div class="clear"></div>
			
			<?php //Lignes 51 à 70 : à répéter autant de fois que nécessaire ?>
			
<?php include('footer.php'); ?>
					
	<!-- Scroll to top -->		
		<div id="up">
			<span class="ion ion-android-arrow-up"></span>
		</div>
		
		<?php include('inc/scripts.php'); ?>
		<script src="js/inc/parallax.min.js"></script>
    </body>
</html>