<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>


	<div class="container" style="margin-top: 4rem;">
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
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			  	<?php if ($page > 1){ ?>
			    <li class="page-item"><a class="page-link" href="?page=<?php echo ($page-1); ?>">Previous</a></li>
			  	<?php } ?>
			    <?php for ($i=1; $i < $total_pages; $i++) { ?>
			    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>	
			    <?php } ?>
			    <?php if ($page!=$total_pages){ ?>
			    <li class="page-item"><a class="page-link" href="?page=<?php echo ($page+1); ?>">Next</a></li>
			    <?php } ?>			  
			</ul>
			</nav>
		</div>
	</div>
	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>