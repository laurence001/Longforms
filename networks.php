<ul id="networks">
	<li><a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>&t=<?php echo $title; ?>" target="blank"><span class="ion ion-social-facebook"></span></a></li>
	<li><a target="_blank" title="Partager sur Twitter" href="http://twitter.com/home?status=<?php echo $title; ?>+<?php echo $url; ?>"><span class="ion ion-social-twitter"></span></a></li>
	<li><a title="Partager par e-mail" href="mailto:?subject='Un ami souhaite partager cet article avec vous :' <?php echo $title; ?>&amp;body='Découvrez :' <strong><?php echo $title; ?></strong>&nbsp;:&nbsp;<a href=<?php echo $url; ?>><?php echo $url; ?></a>" rel="nofollow"><span class="ion ion-ios-email"></span></a></li>
</ul>