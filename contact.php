<?php 
	require_once "library.php";

	echo library::html_header("Third Alarm Diner | Contact Us");
	echo library::website_namelogo();
	echo library::global_nav();

?>

	<div class='container'><h2>Contact Us</h2>
			<div id='contactContent'>
		<h3>Call: <a href="tel:1-207-490-0557">490 - 0557</a></h3>
				<div class='socialMediaSites'>
					<ul>
						<li><a href='https://www.facebook.com/Third-alarm-diner-276269892975/' target='_blank'><img src='img/facebook_logo.png' alt='Facebook Handle' width=60 height=54>Follow us on Facebook</a>
						</li>
					</ul>
				</div>

				<div class='google_maps'>
					<h3>Address:</h3><a href='https://www.google.com/maps/place/Third+Alarm+Diner/@43.440221,-70.773898,16z/data=!4m13!1m7!3m6!1s0x4cb2c9f0249acdf9:0x59ea5cbfde3fb567!2s47+Washington+St,+Sanford,+ME+04073!3b1!8m2!3d43.440221!4d-70.773898!3m4!1s0x4cb2c9f0262ff4fd:0x5575a206e00f0aa4!8m2!3d43.440221!4d-70.773898?hl=en-US' target='_blank'><p class='address'>47 Washington St<br>Sanford, ME 04073<br></p></a>

					<iframe width='600' height='500' frameborder='0' scrolling='no' marginheight='0' src='https://maps.google.com/maps?q=47 washington st sanford me, &t=&z=16&ie=UTF8&iwloc=&output=embed' marginwidth='0'><a class='addmaps' href='http://www.map-embed.com' id='get-map-data' mce_href='http://maps.google.com/maps/api/js?sensor=false'>47 washington st sanford me</a></iframe>
				</div>
			</div>
		</div>


<?php

	echo library::global_footer();
?> 
