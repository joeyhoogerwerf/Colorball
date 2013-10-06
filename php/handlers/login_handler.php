<?php
//PX3L LOGIN HANDLER V1.0_____USER WANTS TO LOGIN_____
try
{
//GET POSTED USER INPUT
$userName = mysqli_real_escape_string($db, strtolower($_POST["userName"]));
$password = mysqli_real_escape_string($db, strtolower($_POST["password"]));

	//SET ERROR MESSAGES	
	$messageUserNameTooShort = 'Username is too short (minimum 5 characters): please try again.';
	$messageUserNameTooLong = 'Username is too long (maximum 15 characters): please try again.';
	$messageUserNameInvalidCharacters = 'Username contains invalid characters: please try again.';
	$messagePasswordTooShort = 'Password is too short (minimum 8 characters): please try again.';
	$messagePasswordInvalidCharacters = 'Password contains invalid characters: please try again.';

/////////////////////////////////////////////////////////////////////////////////////
//ENTER SECURITY GATE
/////////////////////////////////////////////////////////////////////////////////////				

//EXIT 1: WHEN USERNAME CONTAINS LESS THEN 5 CHARACTERS	  		  		
if(strlen($userName) < 5)
{
	//THROW OUT MESSAGE
	throw new Exception($messageUserNameTooShort);    			
}
	    		
	//EXIT 2: WHEN USERNAME CONTAINS MORE THEN 15 CHARACTERS	
	if(strlen($userName) > 15)
	{
	    //THROW OUT MESSAGE
		throw new Exception($messageUserNameTooLong);    			
	}
	    		    		
		//EXIT 3: WHEN USERNAME CONTAINS INVALID CHARACTERS
	   	if(!ereg('^[a-z0-9]+$', $userName))
	   	{
	   		//THROW OUT MESSAGE
	     	throw new Exception($messageUserNameInvalidCharacters);
	    }
	    		
//EXIT 4: WHEN PASSWORD CONTAINS LESS THEN 8 CHARACTERS	 
if(strlen($password) < 8)
{
	throw new Exception($messagePasswordTooShort);    			
}
    		
	//EXIT 5: WHEN PASSWORD CONTAINS INVALID CHARACTERS
   	if(!ereg('^[A-Za-z0-9_-]+$', $password))
   	{
    	throw new Exception($messagePasswordInvalidCharacters);
   	}

/////////////////////////////////////////////////////////////////////////////////////
//EXIT SECURITY GATE
/////////////////////////////////////////////////////////////////////////////////////
						
			    		
	//SALTTTTTTTTT
	$salt = md5($password."%*4!#$;\.k~'(_@");
				   
	//ENCRYPTTTTTTTTT
	$password = md5("$salt$password$salt");
	    			
//PREPARE SQL QUERY: SELECT USER
$sqlSelectUser = "SELECT * FROM users_sandbox WHERE userName = '".$userName."' AND password = '".$password."'"; 
						
	//INJECT SQL QUERY: SELECT USER
	$result = mysqli_query($db, $sqlSelectUser);
					
		//COUNT RESULTS FROM SQL QUERY: SELECT USER
		$row = mysqli_num_rows($result);
						
			//FINAL CHECK	  		  		
			if ($row != 1)
			{
				throw new Exception('Username or password error: please try again.');    			
			}

				//SUCCES! -> LOG USER IN
				 if($row == 1) 
				{
					$_SESSION["userName"] = $userName;	
					$_SESSION["loggedIn"] = 1;
					echo 'fuut!';		
				}
		
		} 	
		  	  		
//CATCH: ERROR MESSAGES
catch(Exception $error)
{
	    		
}
?>