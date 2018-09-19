<?php 
	require_once "library.php";

	echo library::html_header("Third Alarm Diner | Home");
	echo library::website_namelogo();
	echo library::global_nav();

?>	
	<div class='container'>
		<div class="homePictures">
			<img src="img/menuTop.png" width="669" height="295">
		</div>
			<h3>Need a Last Minute Gift?</h3>
				<p>Third Alarm Diner has gift certificates available! Stop by and pick one up!</p>
			<h3>Have an Event Coming Up?</h3>
				<p>Third Alarm Diner will cater your event, meeting, get together
 and many more fun events you may have planned. Check out our <a href="catering.php">catering page</a> to get some ideas then give us a call to talk about the options for your event.</p>
	

<?php
	echo library::global_info();
?>
	</div>
<?php
	echo library::global_footer();
?> 
