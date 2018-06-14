<?php

require_once("config.php");

$perpage = 6;

if (isset($_GET["page"])) {
	$page = intval($_GET["page"]);
}else{
	$page = 1;
}

$calc =  $perpage * $page;
$start =  $calc - $perpage;

$sql = "SELECT * FROM users LIMIT $start, $perpage";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);



include_once("view/index.php");