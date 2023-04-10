<html>
	<head>
		<link rel="stylesheet" type="text/css" href="donorstyle.css">
</head>

<?php		
	include ('include/header.php'); 
?>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donors</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0;">
	<div class="row data">
		<?php
		      $sql = "SELECT * FROM donor";
			  $result = mysqli_query($conn,$sql);
			  if(mysqli_num_rows($result)>0){
				while($row= mysqli_fetch_assoc($result))
				{
						echo'
						        <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
								<span class="name">'.$row['name'].'</span>
								<span>'.$row['city'].'</span>
								<span>'.$row['blood_group'].'</span>
								<span>'.$row['gender'].'</span>
								<span>'.$row['email'].'</span>
								<span>'.$row['contact_no'].'</span>
								<h4 class="name text-center">Wants to donate</h4>
								<span><a href="mailto:' .$row['email'].'"class="btn btn-primary">
								Email me</a></span>

								</div>
						           ';
					}
				}
			  else{
				echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data Not Found.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			    </div>';
			  }
		?>
	</div>
</div>            
<?php	
	include ('include/footer.php'); 
?>
</body>
</html>