<?php
/**
 * Template Name: My Account
 * @author: Dasun Edirisinghe
 **/
get_header(); ?>

	<header>
		<section class="myaccount">
		    <?php baloba_top_bar('primary');?>

		    <div class="container">
		    	<div class="col-xs-12">
		    		<?php the_title('<h1>','</h1>' );?>
		    	</div>
		    </div>
		</section>
		<section class='responsive-nav hidden-md hidden-lg'>
			<div class='mobile-nav-contoller'>
				<a href="#" class="mobile-menu menu-active menu-open hidden-md hidden-lg">
			  		<i class="fa fa-bars"></i>
			  	</a>
			  	<a class="navbar-brand nav-logo" href="#">
                	<img  src="<?php print BALOBA_IMG;?>logo.svg" alt="Baloba">
              	</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
              	<li class="active"><a href="index.html">Vad är baloba?</a></li>
              	<li><a href="products.html">Vi är annorlunda</a></li>
              	<li><a href="technlogy.html">Kom igång</a></li>
              	<li><a href="applications.html">Mer</a></li>
          		<li><a href="aboutus.html">Logga in</a></li>
          	</ul>
		</section>
	</header>

<?php get_footer();?>