<?php 
//*******************NAME OF SERVER
$host = 'px3l.com.mysql';

//*******************NAME OF USER
$user = 'px3l_com';

//*******************PASSWORD DATABASE
$pw = 'MpeQWSip';

//*******************NAME OF DATABASE
$database = 'px3l_com';

//*******************CONNECT TO SERVER
if($db = mysqli_connect($host, $user, $pw))
{
}

//*******************SELECT DATABASE
mysqli_select_db($db, $database);
?>