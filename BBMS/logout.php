<?php
session_start();
$un=$_Session['un'];
unset($un);
session_destroy();
header('Location:index.php');

?>