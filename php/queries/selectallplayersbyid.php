<?php
//********************PREPARE SQL QUERY: SELECT ALL USERS BY ID
$sqlSelectAllUserSById = "SELECT id FROM users_sandbox";

	//********************PREPARE SQL QUERY: SELECT ALL USERS BY ID
	$resultSqlSelectAllUserSById = mysqli_query($db, $sqlSelectAllUserSById);

	//********************GET AMOUNT OF REGISTERED USERS
	$amountOfUsersRegistered = mysqli_num_rows($resultSqlSelectAllUserSById);