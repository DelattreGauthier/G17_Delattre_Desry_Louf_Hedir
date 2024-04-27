<footer>
	<div class="contacter">
		<h3>Contact Us</h3>
		<h3>Tel: 07 69 09 42 32</h3>
		<h4><a class="contact" href=<?php 
			if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
				echo"../Contact/contact.php";
			}else{
				echo"../Contact/contact_connected.php";
			}?>>Contact Us</a></h4>
	</div>
	<div class="a_propos">
		<h3>About Us</h3>
		<h3>Junia Website</h3>
		<h4><a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Presentation</a></h4>
	</div>
</footer>