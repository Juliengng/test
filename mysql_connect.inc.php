<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//database setting
//database location
//$db_server = "162.38.73.0";
$db_server = "127.0.0.1";
//database name
//$db_name = "boardingates";
$db_name = "db654368330";
//database admin account
//$db_user = "admin";
$db_user = "root";
//database admin account password
//$db_passwd = "CH93yAhar3UBB4cU";
$db_passwd = "";
$link = mysqli_connect($db_server, $db_user, $db_passwd);

//database connection
//if(!@$link){
	//	$link = mysqli_connect("127.0.0.1", "root", "");
		if(!@$link)
			die("unable to connect the database");
	//}
//database connection via UTF8
//mysqli_query("SET NAMES utf8");

//select database
if(!@mysqli_select_db($link, $db_name))
        die("no such database");
?>
