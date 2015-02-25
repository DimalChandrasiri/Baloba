<?php
/**
 * Template Name: My Account
 * @author: Dasun Edirisinghe
 **/
get_header(); ?>

	<header>
		<section class="myaccount">
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
		    <?php baloba_top_bar('primary');?>

		    <div class="container">
		    	<div class="col-xs-12">
		    		<?php the_title('<h1>','</h1>' );?>
		    	</div>
		    </div>
		</section>
	</header>
	<section class="my-dashboard">
		<div class="container">
			<div role="tabpanel">

					  <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation">
					    	<a href="#Order status" aria-controls="orderstatus" role="tab" data-toggle="tab"><i class="fa fa-flag-o"></i>Order status</a>
					    </li>
					    <li role="presentation"><a href="#customerinfo" aria-controls="customerinfo" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Customer info</a></li>
					    <li role="presentation"><a href="#superblock" aria-controls="superblock" role="tab" data-toggle="tab">Super block</a></li>
					    <li role="presentation" class="active"><a href="#adminusers" aria-controls="adminusers" role="tab" data-toggle="tab">Adminsitrate users</a></li>
					    <li role="presentation"><a href="#superblock" aria-controls="superblock" role="tab" data-toggle="tab">Invoices</a></li>
					    <li role="presentation"><a href="#superblock" aria-controls="superblock" role="tab" data-toggle="tab">Service cases</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane" id="orderstatus">
					    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					    </div>
					    <div role="tabpanel" class="tab-pane" id="customerinfo">
					    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					    </div>
					    <div role="tabpanel" class="tab-pane" id="superblock">
					    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					    </div>
					    <div role="tabpanel" class="tab-pane active" id="adminusers">
					    	
					    </div>
					  </div>
					</div>
		</div>
	</section>

<?php get_footer();?>