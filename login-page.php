<?php
/**
 * Template Name: My Account Login
 * version 1.0
 * @author: Dasun Edirisinghe
 **/
get_header(); ?>




		<header>
			<section class="hero">
				    <?php baloba_top_bar('primary');?>
			  <div class="my-login-wrapper">
				<div class="my-login center-block">
				   <?php the_title('<h3>','</h3>' ); ?>
				   <?php baloba_login_error();?>
					<form action="" method="POST" class="form-horizontal" role="form">
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
						  <input type="text" class="form-control" placeholder="Username" name="username">
						</div>
						<div class="input-group">
						  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
						  <input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<input type="submit" name="login-submit" class="btn btn-primary btn-lg btn-block" value="Login"/>


					</form>	

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

