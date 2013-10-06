<?php
//PREPARE SQL QUERY: SELECT ALL REVEALED PIXELS
$sqlSelectAllRevealedPixels = "SELECT * FROM pixels_sandbox WHERE revealed = 1";

	//INJECT SQL QUERY: SELECT ALL REVEALED PIXELS
	if($resultSqlSelectAllRevealedPixels = mysqli_query($db, $sqlSelectAllRevealedPixels))
	{			
			//set array for revealed pixels
			$revealedPixels = array();
			
			//as long as there are records in 
			while($record = mysqli_fetch_assoc($resultSqlSelectAllRevealedPixels))
			{
				
				$revealedPixels[] = $record;
			}
	}
?>