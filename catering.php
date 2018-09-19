<?php 
	require_once "library.php";

	echo library::html_header("Third Alarm Diner | Catering");
	echo library::website_namelogo();
	echo library::global_nav();

?>

	<div class='container'>
		<h2>Catering</h2>
			
			
<div class="w3-content w3-display-container" style="width: 85%">
	<img class="slides" src="img/catering_fruit.jpg">
	<img class="slides" src="img/catering_spread.jpg">
	<img class="slides" src="img/catering_salad.jpg">
	<img class="slides" src="img/catering_platter.jpg">
	<img class="slides" src="img/catering_dessert.jpg">
	<img class="slides" src="img/catering_cupcakes.jpg">
	<img class="slides" src="img/catering_tomato.jpg">
	<img class="slides" src="img/catering_trailer.jpg">
	<img class="slides" src="img/catering_alfredo.jpg">
	<img class="slides" src="img/catering_setup.jpg">
	<img class="slides" src="img/catering_tom.jpg">
	<img class="slides" src="img/catering_subs.jpg">
	<img class="slides" src="img/catering_wraps.jpg">
	<img class="slides" src="img/catering_lobsterroll.jpg">
</div>	
	<h3><a href="menu/catering_menu.pdf">Catering Menu</a></h3>		
	<p>Third Alarm Diner will cater your small to large events! Some past caterings include meetings, dedications, ceremonies, memorials, holiday parties, weddings, receptions, and more. Give us a call to talk about what's right for your occasion. We'll make the event easier and more fun by taking your stress away! Call <a href="tel:1-207-490-0557">490-0557</a> to get started planning your next event!</p>		
			
<?php
	echo library::global_info();
?>

	</div>
<script>
	var slideIndex = 0;
	carousel();
	
	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("slides");
	    for (i = 0; i < x.length; i++) {
	      x[i].style.display = "none"; 
	    }
	    slideIndex++;
	    if (slideIndex > x.length) {slideIndex = 1} 
	    x[slideIndex-1].style.display = "block"; 
	    setTimeout(carousel, 3000); // Change image every 3 seconds
	}
</script>

<?php
	echo library::global_footer();
?> 
