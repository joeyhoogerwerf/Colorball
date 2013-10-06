<?php 
//CONNECT USER TO DATABASE
function connect_to_database()
{
	//SETUP:	
	$host = 'localhost'; 	//SERVER
	$user = 'root'; 		//USER	
	$pw = ''; 				//PASSWORD	
	$database = 'px3l_com'; //DATABASE
	
	//CONNECT TO SERVER
	if($db = mysqli_connect($host, $user, $pw))
	{
		//echo 'You have been connected to the database successfully.';
	}
	
	//ON ERROR
	else
	{
		//echo 'There occured an error while connecting to the database.';
	}
		
	//SELECT DATABASE
	mysqli_select_db($db, $database);
	
		//RETURN DATABASE
		return $db;
}
?>