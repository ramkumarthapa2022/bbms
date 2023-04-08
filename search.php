<html>
	<head>
	<link rel="stylesheet" type="text/css" href="searchstyle.css">
	</head>
<body>

<?php 
	include ('include/header.php');
?>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
	<form id="search-form" class="form-inline text-center" action="searchprocess.php" style="padding: 40px 0px 0px 5px;">
		<div class="form-group text-center center-aligned">
								<?php
									include 'citysection.php';
								?>
		</div>
	<div class="form-group center-aligned">
								<?php
									include 'bloodgroupsection.php';
								?>
		</div>
	<div class="form-group center-aligned">
		<button type="submit" class="btn btn-lg btn-default" id="search">Search</button>
		</div>
</form>
	</div>
</div>
</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">		
</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 
	include ('include/footer.php');
?>
</body>
</html>