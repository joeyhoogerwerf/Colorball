<?php
//PREPARE SQL QUERY: SELECT ALL PIXELS
$sqlSelectSelectedPixel = "SELECT numberOfPixel, revealed FROM pixels_sandbox WHERE numberOfPixel='$selectedPixel'";
	
//INJECT SQL QUERY: SELECT ALL PIXELS -> ON SUCCES RUN CODE
if($result = mysqli_query($db, $sqlSelectSelectedPixel))
{
	//CREATE ARRAY FOR PIXELS
	$allPixelsFromDatabase = array();
		
	//RUN NEXT CODE FOR THE AMOUNT OF PIXELS IN RESULT
	while($record = mysqli_fetch_assoc($result))
	{
		//THROW A PIXEL IN ARRAY
		$allPixelsFromDatabase[] = $record;
	}
}
?>