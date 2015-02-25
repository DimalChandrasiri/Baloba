<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Baloba WordPress
 */

get_header(); ?>

		<header>
			<section class="hero">
				    <?php baloba_top_bar('primary');?>
					<div class="container">
						<div class="row hero-content">
							<div class="col-md-12 wow">
								<h1 class="wow fadeInDown">Stenkoll från bergstoppen</h1>
								<h2 class="wow fadeInDown">En snabb titt i appen ger dig tryggheten att slappna av. <br/>Baloba är säkerhet som du vill ha den - när du vill ha den. </h2>
								<a href="#about" class="learn-btn wow fadeInUp">Skapa din säkerhetstjänst och se priset <i class="fa fa-chevron-right"></i></a>
							</div>
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



		<section class="baloba-intro">
			<div class="container">
				<div class="row wow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 wow fadeInLeft">
						<img src="<?php print BALOBA_IMG;?>intro-img.png" class="img-responsive" alt="Image">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 wow fadeInRight">
						<h2>Det nya sättet att köpa säkerhet</h2>
						<p>Med Baloba har du full koll var du än är. Titta till det du vill skydda i mobilen, surfplattan eller datorn. Hyr de säkerhetstjänster du behöver och och få ett säkerhetssystem som är anpassat efter dina behov. Du slipper köpa dyr utrustning och kan när som helst ändra din säkerhetsprenumeration.</p> 

						<p>Ingen bindningstid, inga dolda avgifter, inget krångel.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="baloba-intro second">
			<div class="container">
				<div class="row wow">
					<div class="col-xs-12 col-sm-6 col-md-8 wow fadeInLeft">
						<h2>Tekniknörd? Titta inte hit.</h2>
						<p>Baloba är den supersmidiga säkerhetstjänsten som alla kan använda. Det är busenkelt att beställa tjänsten och lika lätt att använda den. Vill du lägga till eller ta bort en funktion? Allt som krävs är några klick. </p> 

						<p>P.S. Vill du ändå grotta ner dig i tråkigt tekniksnack? 
						<a href="#">Kolla här</a></p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInRight">
						<img src="<?php print BALOBA_IMG;?>intro-img.png" class="img-responsive" alt="Image">
					</div>
				</div>
			</div>
		</section>
		<section class="baloba-intro">
			<div class="container">
				<div class="row wow">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInLeft">
						<img src="<?php print BALOBA_IMG;?>intro-img.png" class="img-responsive" alt="Image">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8 wow fadeInRight">
						<h2>Baloba sover aldrig</h2>
						<p>Med Baloba har du full koll var du än är. Titta till det du vill skydda i mobilen, surfplattan eller datorn. Hyr de säkerhetstjänster du behöver och och få ett säkerhetssystem som är anpassat efter dina behov. Du slipper köpa dyr utrustning och kan när som helst ändra din säkerhetsprenumeration.</p> 

						<p>Ingen bindningstid, inga dolda avgifter, inget krångel.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="baloba-intro second">
			<div class="container">
				<div class="row wow">
					<div class="col-xs-12 col-sm-6 col-md-8 wow fadeInLeft">
						<h2>Extra säkerhet på semestern</h2>
						<p>Vill du ha väktarutryckning när du åker på semester? Med Baloba betalar du bara för det du behöver och ändrar din säkerhetsprenumeration när du vill. Ingen bindningstid!</p> 
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInRight">
						<img src="<?php print BALOBA_IMG;?>intro-img.png" class="img-responsive" alt="Image">
					</div>
				</div>
			</div>
		</section>
		<section class="baloba-intro last">
			<div class="container">
				<div class="row wow">
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow bounceInDown">
						<img src="<?php print BALOBA_IMG;?>mobile-img.png" class="img-responsive" alt="Image">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8 wow fadeInLeft">
						<h2>Extra säkerhet på semestern</h2>
						<p>Vill du ha väktarutryckning när du åker på semester? Med Baloba betalar du bara för det du behöver och ändrar din säkerhetsprenumeration när du vill. Ingen bindningstid!</p> 
					</div>
				</div>
			</div>
		</section>
		<section class="baloba-story">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <div class="carousel-inner">
		        <div class="item active">
		          <div class="container">
		             <img class="img-responsive" src="<?php print BALOBA_IMG;?>user-1.png"/>
		             <h4>“Tidigare brukade jag ta en sväng förbi bageriet på kvällarna. Nu kollar jag på kamerorna i appen. Men egentligen behövs det inte – jag får ju ett larm om något händer.“</h4>
		             <h3>-– Farzaneh, bagare</h3>
		          </div>
		        </div>
		        <div class="item">
		          <div class="container">
		             <div class="container">
		             	<img class="img-responsive" src="<?php print BALOBA_IMG;?>user-1.png"/>
		             	<h4>“Tidigare brukade jag ta en sväng förbi bageriet på kvällarna. Nu kollar jag på kamerorna i appen. Men egentligen behövs det inte – jag får ju ett larm om något händer.“</h4>
		             	<h3>-– Farzaneh, bagare</h3>
		          	</div>
		          </div>
		        </div>
		        <div class="item">
		          <div class="container">
		             <div class="container">
		             	<img class="img-responsive" src="<?php print BALOBA_IMG;?>user-1.png"/>
		             	<h4>“Tidigare brukade jag ta en sväng förbi bageriet på kvällarna. Nu kollar jag på kamerorna i appen. Men egentligen behövs det inte – jag får ju ett larm om något händer.“</h4>
		             	<h3>-– Farzaneh, bagare</h3>
		          	</div>
		          </div>
		        </div>
		      </div>
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		    </div><!-- /.carousel -->
		</section>
		<section class='economic-benifit'>
			<div class='container'>
				<div class='row'>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="circlestat" data-dimension="250" data-text="63%" data-info="Utan dolor lorem ipsum" data-width="15" data-fontsize="38" data-percent="63" data-fgcolor="#E9255D" data-bgcolor="#eee"></div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="circlestat" data-dimension="250" data-text="81%" data-info="Med dolor lorem ipsum" data-width="15" data-fontsize="38" data-percent="81" data-fgcolor="#1F9FD2" data-bgcolor="#eee"></div>
					</div>
					<div class="economic-desc col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<h2>Säkerhet - en lönsam affär</h2>
						<p>Har du koll på svinnet i din butik? Med rätt säkerhet kan du spara pengar och far en tryggare arbetsmiljo</p>
						<a href="#" class="learn-btn wow fadeInUp animated" style="visibility: visible;">Se hur mycket du kan spara <i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</section>
		<section class="features-list" id="features">
			<div class="container">
					<h1>Lorem ipssum dolor sit amet</h1>
					<p>Baloba features</p>
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s'>
						<i class="flaticon-camera113"></i>
						<h3>Cameras</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s'>
						<i class="flaticon-police22"></i>
						<h3>Saftey Alarm</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s'>
						<i class="flaticon-exit7"></i>
						<h3>Intrusion</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s'>
						<i class="flaticon-2417"></i>
						<h3>24 hour <br> accessability</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='0.5s'>
						<i class="flaticon-businessman250"></i>
						<h3>Security administration <br> on demand</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='0.5s'>
						<i class="flaticon-favorite21"></i>
						<h3>Self monitoring</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='0.5s'>
						<i class="flaticon-man337"></i>
						<h3>Monitoring station</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='0.5s'>
						<i class="flaticon-policeman1"></i>
						<h3>Guardian</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='1s'>
						<i class="flaticon-install2"></i>
						<h3>Installation</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='1s'>
						<i class="flaticon-shopping155"></i>
						<h3>Service and support</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='1s'>
						<i class="flaticon-install2"></i>
						<h3>Dummy</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow zoomIn animated" data-wow-duration='0.6s' data-wow-delay='1s'>
						<i class="flaticon-shopping155"></i>
						<h3>Dummy</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamu viate dui suscipitimolesti non massa.</p>
					</div>
				</div>
			</div>
		</section>
		<section class='last-chance'>
			<div class="container last-chance-container">
				<h1>Men hej!</h1>
				<p>Har du tagit dig ända ner hit? Då har du förhoppningsvis sett alla fordelar <br> med Baloba. Vad vantar du pa? Se vad tjansten skulle kosta dig.</p>
				<a href="#" class="learn-btn last-chance-button wow fadeInUp animated" style="visibility: visible;">Skapa din säkerhetstjänst och se priset <i class="fa fa-chevron-right"></i></a>
				<p >Ingen bindningstid</p>
			</div>
		</section>
		<footer class='footer'>
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<a class="navbar-brand wow fadeInLeft" href="#">
		                	<img class='footer-margin' src="<?php print BALOBA_IMG;?>logo.svg" alt="Baloba">
		                	<p>Telefon 0771-123 456</p>
		                	<p>Mail info@baloba.com</p>
		              	</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<p>LÄNKAR</p>
		                <p>Säkerhetslösningar</p>
		                <p>Att bli kund</p>
		                <p>Larmcentral</p>
		                <p>Lorem ipsum</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<p>FAQ</p>
		                <p>Lorem ipsum dolor sit</p>
		                <p>Amet conscelur amore</p>
		                <p>Vivamus vitae dui suscipmole</p>
		                <p>Non mase dui dole ameilo</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<p>Nyheter</p>
						<div class='footer-box'>
							<p>21 februari 2015</p>
							<p>Lorem ipsum dolor site amet</p>
						</div>
						<div class='footer-box'>
							<p>21 februari 2015</p>
							<p>Lorem ipsum dolor site amet</p>
						</div>
						<div class='footer-box'>
							<p>21 februari 2015</p>
							<p>Lorem ipsum dolor site amet</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<section class='footer-copy'>
			<div class="container">
				<div class="row">
					<p>&copy; Copyright Baloba - 2015</p>
				</div>
			</div>
		</section>

<?php get_footer(); ?>

