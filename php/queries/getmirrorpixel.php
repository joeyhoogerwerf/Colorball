<?php
//PREPARE SQL QUERY: SELECT MIRROR PIXEL == (PIXEL IN DATABASE BY USERS INPUT)
$sqlSelectMirrorPixel = "SELECT numberOfPixel, revealed FROM pixels_sandbox WHERE numberOfPixel='$selectedPixel'";
	
//INJECT SQL QUERY: SELECT MIRROR PIXEL -> ON SUCCES RUN CODE
if($result = mysqli_query($db, $sqlSelectMirrorPixel))
{
	//CREATE ARRAY FOR MIRROR PIXEL
	$mirrorPixelArray = array();
		
	//RUN NEXT CODE IN CASE MIRROR PIXEL EXISTS
	while($record = mysqli_fetch_assoc($result))
	{
		//THROW MIRROR PIXEL IN ARRAY
		$mirrorPixelArray[] = $record;
	}
	
	//RUN NEXT CODE IN CASE MIRROR PIXEL EXISTS IN ARRAY
	foreach($mirrorPixelArray as $mirrorPixelElements)
	{
		//SET MIRROR PIXEL -> GET NUMBER OF MIRROR PIXEL
		$mirrorPixel = $mirrorPixelElements["numberOfPixel"];
		
		//GET MIRROR PIXEL REVEALED STATUS
		$mirrorPixelRevealedStatus = $mirrorPixelElements["revealed"];
	}
}
?>