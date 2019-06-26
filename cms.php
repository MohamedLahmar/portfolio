<?php
include 'includes/cmsfunctions.php';
include 'includes/db.php';
//session_start();

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){

}
else{
	header("location:index.php");
}

if(isset($_POST['logout'])){
	session_destroy();
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio | CMS</title>
	<link rel="stylesheet" type="text/css" href="css/cmsstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script  src="ckeditor/ckeditor.js" type="text/javascript">

  </script>
	<script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	<form method="POST"><input type="submit" name="logout" value="Logout"></form>

	<div class="projecten">
		<h3>projecten</h3>
		<form method="POST" class="frmprojecten
		">
			<input type="submit" name="updateProjecten" value="Update projecten" class="updateProjecten"><br><br>
			<table>
				<thead>
					<tr>
						<th></th>
						<th>Naam</th>
						<th>Beschrijving</th>
						<th>Bestand</th>
						<th>Delete</thf

					</tr>
				</thead>
				<tbody>
					<?php showprojecten(); ?>
				</tbody>
			</table>
		</form>
		<form method="POST" class="frmprojectenExtra" enctype="multipart/form-data">
		<input type="text" name="naam" placeholder="Naam">
		<input type="text" name="beschrijving" placeholder="Beschrijving">
		<input type="file" name="file">
		<input type="submit" name="addProduct" value="Toevoegen">
	</form>
	</div>

	<div class="leerprocessen">
		<h3>Leerprocessen</h3>
		<form method="POST" class="frmArt">
			<input type="submit" name="updateArt" value="Update leerproces" class="updateArt"><br><br>
			<table>
				<thead>
					<tr>
						<th></th>
						<th>Naam</th>
						<th>Probleem</th>
						<th>Code</th>
						<th>Verbeterde code</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php showLeerprocessen(); ?>
				</tbody>
			</table>
		</form><br><br>
		<form method="POST" class="frmArtExtra">
			<input type="text" name="naam" placeholder="Naam">
			<div id="flip">Probleem</div>
			<div id="panel"><textarea name="probleem" id="editor1" >Probleem</textarea></div>
			<div id="flip2">Wat heb ik gedaan?</div>
			<div id="panel2"><textarea name="code" id="editor2" >Probleem</textarea></div>
			<div id="flip3">Wat heb ik geleerd?</div>
			<div id="panel3"><textarea name="verbeterdecode" id="editor3" >Probleem</textarea></div>
			<input type="submit" name="addArt" value="Toevoegen">
		</form>
		<script type="text/javascript">
		$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
		});
		$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideDown("slow");
    });
		});
		$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideDown("slow");
    });
		});
			CKEDITOR.replace( 'probleem' );
			CKEDITOR.replace( 'code' );
			CKEDITOR.replace( 'verbeterdecode' );
			CKEDITOR.config.autoParagraph = false;
		</script>
	</div>


</body>
</html>
