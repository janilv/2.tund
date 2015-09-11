<?php
	
	$first_name = "Jan-Erik";
	$last_name = "Ilves";

	echo $first_name." ".$last_name;

?>

<br>

<?php

	$age = 5;
	
	// kui on väiksem kui 18, siis alaealine
	// kui on suurem siis täisealine
	if($age < 18)	{ 
		//tõene
		echo "alaealine";
		
	} else {
		//väär
		echo "täisealine";
	}	
		
?>