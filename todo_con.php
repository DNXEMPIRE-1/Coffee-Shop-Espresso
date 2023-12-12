<?php
session_start();


require_once "config.php";



// $food = mysqli_real_escape_strinsss
$todo=mysqli_real_escape_string($mysqli, $_POST['todo']);


	


			$insert_row = $mysqli->query("INSERT INTO todo (todo) VALUES ('$todo')");


			if ($insert_row) {



				echo 'true';

			}
			else
				echo $todo;

	
		
		


?>