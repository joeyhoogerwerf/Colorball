<?php
//PREPARE SQL QUERY: SELECT ALL USERNAMES AND EMAILS
$sqlSelectAllUserNamesAndEmails = "SELECT userName, email FROM users_sandbox";
	
	//INJECT SQL QUERY: SELECT ALL USERNAMES AND EMAILS
	if($result = mysqli_query($db, $sqlSelectAllUserNamesAndEmails))
	{
		//CREATE ARRAY FOR ALL USERNAMES AND EMAILS
		$allUserNamesAndEmails = array();
		
		//AS LONGS AS THERE ARE RECORDS IN RESULT -> RUN CODE
		while($record = mysqli_fetch_assoc($result))
		{
			//THROW RECORD IN ARRAY
			$allUserNamesAndEmails[] = $record;
		}
	}
?>