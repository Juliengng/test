<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//clear session
unset($_SESSION['username']);
 session_destroy();
echo 'logout now......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>