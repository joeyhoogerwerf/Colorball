<?php
//GET USER STATISTICS
function get_user_statistics()
{
	//CONNECT TO DATABASE
	$db = connect_to_database();
	
	//GET USERNAME
	$userName = $_SESSION["userName"];
	
	//PREPARE SQL QUERY: GET USER STATISTICS
	$sqlGetUserStatistics = "
									SELECT 	amountOfPixels,
											amountOfXPP,
											lvl,
											timestamp,
											freeToHit,
											timer,
											recruitedBy
																	
									FROM users_sandbox 
									
									WHERE userName = '$userName'							
							   ";
		
	//INJECT SQL QUERY: GET USER STATISTICS
	if($result = mysqli_query($db, $sqlGetUserStatistics))
	{
		//THROW QUERY-RESULT IN ARRAY USERSTATISTICS
		$userStatistics = mysqli_fetch_assoc($result);
	}
	
	//RETURN USERSTATISTICS
	return $userStatistics;
}
?>