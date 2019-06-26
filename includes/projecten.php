<?php
include 'includes/db.php';

$sql = "SELECT * FROM projecten";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div style='border-bottom:1px solid black; padding-bottom:0.5%;'>";
			echo "<label style='font-weight:bold'>".$row['naam']."</label><br><br>";
			echo "<label style='word-wrap:break-word;'>".$row['beschrijving']."</label><br><br>";
			echo "<a href='".$row['afbeelding']."' style='text-decoration:none;'>Bekijk bijhorende bestand</a>";
		echo "</div>";
	}
}
