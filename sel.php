<?php

$db = new mysqli ('localhost','root','','inqdb'); 

if($db -> connect_errno){
	die('sorry');
}

?>