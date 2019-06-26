<?php


$sql = "SELECT * FROM leerproces";
$result = $conn->query($sql);
if($result->num_rows > 0){
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "<div style='border-bottom:1px solid black; padding-bottom:0.5%;'>";
			echo "<label style='font-weight:bold'>".$row['naam']."</label><br><br>";
			echo "<label>".$row['probleem']."</label><br><br>";
			echo "<i><label>Wat heb ik gedaan?</label></i>";
			echo "<p style='word-wrap: break-word; background-color: #eee; padding:2%;margin:0;'>".$row['code']."</p><br>";
			echo "<i><label>Wat heb ik geleerd?</label></i>";
			echo "<p style='word-wrap: break-word; background-color: #eee; padding:2%;margin:0;'>".$row['verbeterde_code']."</p>";
		echo "</div>";
	}
}
