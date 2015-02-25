<?php
/**
 * Theme Helper functions
 *
 * @package Baloba WordPress
 */

/*----- Navigaion Functions -----*/ 

function baloba_main_nav($menu_location){

  $args = array(
 		'theme_location' => $menu_location,
 		'menu' => '',
 		'container' => 'false',
 		'menu_class' => 'nav navbar-nav navbar-right hidden-sm hidden-xs wow fadeInRight',
 		'echo' => true,
 	);

  wp_nav_menu( $args );
}

/*------ Top Nav Bar  ----*/ 

function baloba_top_bar($menu_location){ ?>

<div class="navbar-wrapper" id="top">
  <div class="container">
    <div class="navbarnavbar-static-top" role="navigation">
      <div class="container wow">
		  <a href="javascript:void(0)" class="mobile-menu hidden-md hidden-lg">
		  	<i class="fa fa-bars"></i>
		  </a>
          <a class="navbar-brand wow fadeInLeft" href="#">
            <img  src="<?php print BALOBA_IMG;?>logo.svg" alt="Baloba">
          </a>
          <?php baloba_main_nav($menu_location);?>
      </div> <!--/.navbar container-->
    </div>
  </div>
</div><!--/. end navbara warpper-->


<?php } 

/*------ Form Submit  ----*/ 

function baloba_api_froms(){
	
	if(isset($_POST['login-submit'])){

	  $data = array('userName'=> $_POST['username'],'password' => $_POST['password']);

	  $ch = curl_init('https://54.169.242.241:8243/authentication_api/auth/is_valid_login');
	  
	  curl_setopt_array($ch, array(
	      CURLOPT_POST => TRUE,
	      CURLOPT_RETURNTRANSFER => TRUE,
	      CURLOPT_HTTPHEADER => array(
	          'Authorization: Bearer d4f47a1dd7fda35a576ec02a97df3ca3',
	          'Content-Type: application/json'

	      ),
	      CURLOPT_POSTFIELDS => json_encode($data)
	  ));

	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

	  $response = curl_exec($ch);


	  if($response === FALSE){
	      die(curl_error($ch));
	  }

	  $responseData = json_decode($response, TRUE);

	  extract($responseData);

		if($status == 'SUCCESS'){
			$page_id = get_page_by_title('My Account' );
			wp_redirect( get_permalink($page_id->ID )); exit; 
		}

	  	return $responseData;

	}

}
add_action('init','baloba_api_froms');

function baloba_login_error(){

	$responseData = baloba_api_froms();

	if(isset($responseData)){

		extract($responseData);


		switch ($code) {
			case '10005':
				echo '<div class="error">'.$message.'</div>';
				break;
			
			case '10004':
				echo '<div class="error">'.$message.'</div>';
				break;

			case '10003':
				echo '<div class="error">'.$message.'</div>';
				break;

			case '10002':
				echo '<div class="error">'.$message.'</div>';
				break;

			default:
				break;
		}

  	}
}

function baloba_login_handler(){

	$responseData = baloba_api_froms();
	var_dump($responseData);

	if($responseData != null){
		extract($responseData);

		if($status == 'SUCCESS'){
			$wp_session['user_name'] = $_POST['username'];
			$wp_session['isAdmin'] = $admin;
			wp_redirect( 'http://www.google.com', 301 );
			exit;
		}
	}
	
}
