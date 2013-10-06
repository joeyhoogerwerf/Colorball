<?php
include("php/functions/connect_to_database.php");

//CONNECT TO DATABASE
$db = connect_to_database();

	//PREPARE SQL QUERY: SELECT ALL REVEALED PIXELS
	$sqlSelectAllRevealedPixels = "SELECT numberOfPixel FROM pixels_sandbox WHERE revealed = 1";
	
		//INJECT SQL QUERY: SELECT ALL REVEALED PIXELS
		if($resultSqlSelectAllRevealedPixels = mysqli_query($db, $sqlSelectAllRevealedPixels))
		{
			//COUNT AMOUNT OF REVEALED PIXELS
			$amountOfRevealedPixels = mysqli_num_rows($resultSqlSelectAllRevealedPixels);
			
				//GET AMOUNT OF UNREVEALED PIXELS LEFT
				$amountOfUnrevealedPixels = 140000 - $amountOfRevealedPixels;
				
					//ECHO RESULT
					echo '<span class="bold">'.$amountOfUnrevealedPixels.'</span>';
		}
		
//DISCONNECT DATABASE
include("../databaseconnection/disconnectdatabase.php");
?>