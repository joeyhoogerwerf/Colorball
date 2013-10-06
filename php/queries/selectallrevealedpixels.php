<?php
//PREPARE SQL QUERY: SELECT ALL REVEALED PIXELS
$sqlSelectAllRevealedPixels = "SELECT numberOfPixel FROM pixels_sandbox WHERE revealed = 1";
	
	//INJECT SQL QUERY: SELECT ALL REVEALED PIXELS
	if($resultSqlSelectAllRevealedPixels = mysqli_query($db, $sqlSelectAllRevealedPixels))
	{
		//COUNT AMOUNT OF REVEALED PIXELS
		$amountOfRevealedPixels = mysqli_num_rows($resultSqlSelectAllRevealedPixels);
			
			//GET AMOUNT OF UNREVEALED PIXELS LEFT
			$amountOfUnrevealedPixels = 140000 - $amountOfRevealedPixels;
	}
?>