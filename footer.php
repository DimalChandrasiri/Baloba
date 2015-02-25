<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Baloba WordPress
 */
?>


<?php wp_footer(); ?>


		<script>
		 new WOW().init();
		</script>
		<script>
		$( document ).ready(function() {
		 	$('.circlestat').circliful();
		 	$('.mobile-menu').click(function(){
			    $('.responsive-nav').show("slide", { direction: "left" }, 500);
		 	});

		 	$('.menu-active').click(function(){
			    $('.responsive-nav').hide("slide", { direction: "left" }, 500);
		 	});
		 });
		</script>

</body>
</html>