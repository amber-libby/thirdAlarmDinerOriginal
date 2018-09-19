<?php
	class library{

		static function html_header($title="Untitled"){
$string = <<<END
<!DOCTYPE html>
<html>
<head>
		<title>$title</title>
		<link href="css/style.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112741756-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-112741756-1');
		</script>

</head>
<body>\n
END;
			return $string;
		}//end of html_header

	
//GLOBAL NAV
		static function global_nav(){
$string = <<<END
<nav>
	<ul class="navbar">
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About Us</a></li>
		<li><a href="menu/drink_menu.pdf">Drink Menu</a></li>
		<li><a href="menu/breakfast_menu.pdf">Breakfast Menu</a></li>
		<li><a href="menu/lunch_menu.pdf">Lunch & Dinner Menu</a></li>
		<li><a href="catering.php">Catering</a></li>
		<li><a href="employment.php">Employment</a></li>
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
</nav></div>\n
END;
			return $string;
		}//end of global nav


//GLOBAL FOOTER
		static function global_footer(){
$string = <<<END
<footer class="footer">
   	<div>
   		<p>Copyright &copy; 2018 Amber Normand</p>
    </div>
</footer>
	</body>
</html>\n
END;
			return $string;
		}//end of global_footer

//GLOBAL CONTACT INFO
		static function global_info(){
$string = <<<END
   	<div class="info">
   		<p><h3>Third Alarm Diner</h3><br>
   		47 Washington Street<br>
   		Sanford, ME 04073<br>
   		(207) 490 - 0557<br>
   		</p>
   		<p><a href='https://www.google.com/maps/place/Third+Alarm+Diner/@43.440221,-70.773898,16z/data=!4m13!1m7!3m6!1s0x4cb2c9f0249acdf9:0x59ea5cbfde3fb567!2s47+Washington+St,+Sanford,+ME+04073!3b1!8m2!3d43.440221!4d-70.773898!3m4!1s0x4cb2c9f0262ff4fd:0x5575a206e00f0aa4!8m2!3d43.440221!4d-70.773898?hl=en-US' target='_blank'>Get Directions</a>| <a href="tel:1-207-490-0557">Call Us</a>
   		</p>
    </div>
	</body>
</html>\n
END;
			return $string;
		}//end of global_info


//WEBSITE NAME and LOGO
		static function website_namelogo(){
$string = <<<END
<div class="topcontainer">
	<div class="heading">
			<h1><a href="index.php"><img src="img/logo_name.jpg" alt="Third Alarm Diner Logo" height="90" width="90">
				Third Alarm Diner
			<img src="img/logo_name.jpg" alt="Third Alarm Diner Logo" height="90" width="90"></a></h1>

	</div>\n
END;
			return $string;
		}//end of website name and logos






	}//end of class
?>