<?php
//sql statement: select all users from database
$sqlSelectUsersForHighscore = "SELECT id, userName, amountOfXPP FROM users_sandbox ORDER BY amountOfXPP DESC";
	
	//query injected?
	if($result = mysqli_query($db, $sqlSelectUsersForHighscore))
	{
		//create array $users
		$usersForHighscore = array();
		
		//as long as there are users in $result run next code
		while($record = mysqli_fetch_assoc($result))
		{
			//throw user from $record into array $users
			$usersForHighscore[] = $record;
		}
	}
?>