<?php

require_once("config.php");


$getData = "SELECT * FROM users";
$rs = mysqli_query($conn,$getData);
$num_rows = mysqli_num_rows($rs);

$start = 0;
$limit = 6;


if (isset($_GET["page"])) {
	$page = intval($_GET["page"]);
	$start = ($page-1)*$limit;
}else{
	$page = 1;
}


$sql = "SELECT * FROM users LIMIT $start, $limit";
$result = mysqli_query($conn,$sql);


$total_pages = ceil($num_rows/$limit);



include_once("view/index.php");