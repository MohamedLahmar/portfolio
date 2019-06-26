<?php
include 'includes/login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio | Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<nav>
		<div class="menu">
			<label for="toggle" id="menuLabel" onclick="showMenu()">&#9776;</label>
			<input type="checkbox" id="toggle">
		</div>
		<ul>
			<li><a href="#home" id="home">Home</a></li>
			<li><a href="#inleiding" id="inleiding">Inleiding</a></li>
			<li><a href="#projecten" id="projecten">Vakken</a></li>
			<li><a href="#artikelen" id="artikelen">Leerprocessen</a></li>S
		  	<li><a href="#contact" id="contact">Contact</a></li>
		</ul>
	</nav>
	<section class="intro">
		<div class="introInner">
			<div class="introContent">
				<h1>Portfolio</h1>
				<i><h3>Mohamed Lahmar</h3></i>
			</div>
		</div>
	</section>

	<section class="inleiding">
		<h1>Inleiding</h1>
		<p>IK BEN MOHAMED LAHMAR, OP DIT MOMENT VOLG IK DE STUDIE ICT & MEDIA DESIGN AAN DE FONTYS HOGESCHOOL ICT TE EINDHOVEN.
			IN MIJN PORTFOLIO GEEF IK MIJN VISIE OP MEDIA DESIGN, DOELEN, WERK EN ONTWIKKELING ALS MEDIA DESIGNER WEER.</p>
	</section>

	<section class="projecten">
		<h1>Vakken</h1>
		<?php include 'includes/projecten.php';?>
	</section>

	<section class="artikelen">
		<h1>Leerprocessen</h1>
		<?php include 'includes/leerprocessen.php';?>
	</section>

	<section class="footer">
		<div class="social">
			<h3>Blijf verbonden</h3>
			<img src="img/facebook.png" height="50px" width="50px">
			<img src="img/instagram.png" height="50px" width="50px">
			<img src="img/twitter.png" height="50px" width="50px">
		</div>
		<div class="contact">
			<h3>Contact</h3>
			<form>
	    		<label for="naam">Naam</label>
	    		<input type="text" id="naam" placeholder="Naam">

			    <label for="email">Email</label>
			    <input type="email" id="mail" placeholder="Email">

			    <label for="vraag">Vraag</label>
			    <textarea id="vraag" placeholder="Vraag"></textarea>

				<span onclick="contact()" id="btnContact">Verzend</span>
				<label id="contactResult"></label>
	  		</form>
		</div>
	</section>
	<section class="copyright">
		<div class="copyright-label">
			<label>Copyright © 2018 All rights reserved | Created by: Mohamed Lahmar</label>
		</div>
		<div class="cms">
			<label id="lblCms">CMS</label>
		</div>
	</section>

	<div id="myModal" class="modal">
  		<div class="modal-content">
    		<div class="modal-header">
      			<span class="close">&times;</span>
      			<h4>CMS</h4>
    		</div>
    		<div class="modal-body">
	      		<form method="POST">
		    		<input type="password" name="password" placeholder="Password">
		    		<input type="submit" name="login" value="Login">
	  			</form>
			</div>
  		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
