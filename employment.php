<?php 
	require_once "library.php";

	echo library::html_header("Third Alarm Diner | Employment");
	echo library::website_namelogo();
	echo library::global_nav();

?>
	<div class='container'>
		<h2>Employment</h2>

		<p>Interested in joining the Third Alarm team? Print and completely fill out the application then bring it into the diner. <a href="menu/jobApplication.pdf">Download Job Application</a></p>
<?php
	echo library::global_info();
?>
	</div>
<?php
	echo library::global_footer();
?> 
