<?php
	$connection = mysqli_connect("127.0.0.1", "root", "2bvAmULEzaP", "saborVital", "6924");

	if($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


?>