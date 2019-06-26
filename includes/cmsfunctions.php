<?php
include 'includes/db.php';
session_start();

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){

}
else{
	header("location:index.php");
}

if(isset($_POST['logout'])){
	session_destroy();
	header("location:index.php");
}

// hieronder zorg ik ervoor dat mijn porjecten beschrijving word geupdate
if(isset($_POST['updateprojecten'])){
	$arr = count($_POST['id']);
	for ($i=0; $i < $arr; $i++) {
		$sql = "UPDATE projecten SET naam = '".$_POST['naam'][$i]."', beschrijving = '".$_POST['beschrijving'][$i]."' WHERE id = '".$_POST['id'][$i]."' ";
		if($conn->query($sql) == true){
			echo $_POST['id'][$i].":Succesfull  ";
		}
		else{
			echo $_POST['id'][$i].":Failed  ";
		}
	}
}
// hieronder zorg ik dat er nieuwe vakken in de database komen
if(isset($_POST['addvak'])){
	$newpath = "img/".$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $newpath);
	$sql = "INSERT INTO projecten (naam, beschrijving, afbeelding) VALUES ('".$_POST['naam']."', '".$_POST['beschrijving']."', '$newpath')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}

//met deze functie zorg ik ervoor dat alle vakken tevoorschijn komen
function showvakken(){
	include 'includes/db.php';
	$sql = "SELECT * FROM vakken";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td><input type='hidden' name='id[]' value='".$row['id']."'/></td>";
			echo "<td><input type='text' name='naam[]' value='".$row['naam']."'/></td>";
			echo "<td><input type='text' name='beschrijving[]' value='".$row['beschrijving']."'/></td>";
			echo "<td> <img src='".$row['afbeelding']."' height='25px' width='25px'/> </td>";
			echo "<td> <a href='?id=".$row['id']."&sort=projecten' class='deleteProduct'>Delete</a> </td>";
			echo "</tr>";
		}
	}
}

// hieronder verwijder ik projecten

if(isset($_GET['id']) && $_GET['sort'] == "projecten"){
	$sql = "DELETE FROM projecten WHERE id = '".$_GET['id']."' ";
	if($conn->query($sql) == true){
		echo "Succesfully deleted";
	}
	else{
		echo "Failed to delete";
	}
// hieronder verwijdr ik leerprocessen
if(isset($_GET['id']) && $_GET['sort'] == "leerprocessen"){
	$sql = "DELETE FROM leerproces WHERE id = '".$_GET['id']."' ";
	if($conn->query($sql) == true){
		echo "Succesfully deleted";
	}
	else{
		echo "Failed to delete";
	}
}
 // hieronder update ik mijn leerprocessen
if(isset($_POST['updateArt'])){
	$arr = count($_POST['id']);
	for ($i=0; $i < $arr; $i++) {
		$sql = "UPDATE leerproces SET naam = '".$_POST['naam'][$i]."', probleem = '".$_POST['probleem'][$i]."', code = '".$_POST['code'][$i]."', verbeterde_code = '".$_POST['verbeterdecode'][$i]."' WHERE id = '".$_POST['id'][$i]."' ";
		if($conn->query($sql) == true){
			echo $_POST['id'][$i].":Succesfull niffo ";
		}
		else{
			echo $_POST['id'][$i].":Failed  ";
		}
	}
}
// hieronder voeg ik nieuwe leerporcessen toe
if(isset($_POST['addArt'])){
	$sql = "INSERT INTO leerproces (naam, probleem, code, verbeterde_code) VALUES ('".$_POST['naam']."', '".$_POST['probleem']."', '".$_POST['code']."', '".$_POST['verbeterdecode']."')";
	if($conn->query($sql) == true){
		echo "Succesfully added";
	}
	else{
		echo "Failed to add";
	}
}

// met deze  functie zorg ik ervoor dat mijn leerprocessen tevoorschijn komen

function showLeerprocessen(){
	include 'includes/db.php';
	$sql = "SELECT * FROM leerproces";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td><input type='hidden' name='id[]' value='".$row['id']."'/></td>";
			echo "<td><input type='text' name='naam[]' value='".$row['naam']."'/></td>";
			echo "<td><input type='text' name='probleem[]' value='".$row['probleem']."'/></td>";
			echo "<td><input type='text' name='code[]' value='".$row['code']."'/></td>";
			echo "<td><input type='text' name='verbeterdecode[]' value='".$row['verbeterde_code']."'/></td>";
			echo "<td> <a href='?id=".$row['id']."&sort=leerprocessen' class='deleteArt'>Delete</a> </td>";
			echo "</tr>";
		}
	}
}
