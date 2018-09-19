<?php 
	require_once "library.php";

	echo library::html_header("Third Alarm Diner | About Us");
	echo library::website_namelogo();
	echo library::global_nav();

?>
	<div class='container'>
		<h2>About Us</h2>

		<p>Classic diner food. Meatloaf, mac & cheese, great burgers, breakfast ALL Day, beer, wine, spirits, appetizers, milk shakes and MORE!  Third Alarm Diner has been around for years serving Sanford and surrounding areas.</p>
		<p>We offer catering for small to large events so give us a call to get your event booked! Check out some of our <a href="catering.php">previous catering</a> to get some ideas for your special event.</p>
<?php
	echo library::global_info();
?>
	</div>
<?php
	echo library::global_footer();
?> 
