<?php 
	include ('include/header.php');
?>
<head>
<link rel="stylesheet" href="indexstyle.css">
</head>
<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="header">
							<h1 class="text-center">Donate blood, save life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search for Donors, Save a Soul</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								
</div>
							<div class="form-group center-aligned">
								
							</div>
							<div class="form-group center-aligned">
								<!--<button type="submit" class="btn btn-lg btn-danger">Search</button>-->
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- donate section -->
			

			<?php 
				include 'donatesection.php';
			?>
			<!-- end doante section -->
			
			<?php 
				include 'aboutsection.php';
			?>
			
			<!-- end aboutus section -->
<?php
//include footer file
include ('include/footer.php');
 ?>