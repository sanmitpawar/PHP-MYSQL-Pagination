<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


	<div class="container">
		<div class="row">
			<?php if ($num_rows >= 1) {
				$i = 0;
				while ($rows = mysqli_fetch_assoc($result)) { ?>
						<div class="col-md-4">
							<div class="well">
								<p><?php echo $rows['id']; ?></p>
								<p><?php echo $rows['first_name']." ".$rows['last_name']; ?></p>
							</div>
						</div>
				<?php }	
			} ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if (isset($page)){ 
					$result = mysqli_query($conn,"select count(*) As total from users");
					$rows = mysqli_num_rows($result);
					if ($rows) {
						$rs = mysqli_fetch_assoc($result);
						$total = $rs["total"];
					}
					$totalPages = ceil($total / $perpage);
					if($page <=1 ){
						echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";
					}else{
						$j = $page - 1;
						echo "<span><a id='page_a_link' href='index.php?page=$j'>< Prev</a></span>";
					}
					for($i=1; $i <= $totalPages; $i++)
					{
						if($i<>$page)
						{
							echo "<span><a id='page_a_link' href='index.php?page=$i'>$i</a></span>";
						}else{
							echo "<span id='page_links' style='font-weight: bold;'>$i</span>";
						}
					}
					if($page == $totalPages )
					{
						echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";
					}else{
						$j = $page + 1;
						echo "<span><a id='page_a_link' href='index.php?page=$j'>Next</a></span>";
					}
				}?>
			</div>
		</div>
	</div>
	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>