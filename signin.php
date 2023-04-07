<?php include 'include/header.php' ?>
<head>
<link rel="stylesheet" type="text/css" href="signinstyle.css">
</head>

<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">
		
		<!-- Erorr Messages -->

			<form action="signinprocess.php" method="post" >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<div class="input-group">
					<input type="password" name="password" placeholder="Password" required class="form-control" id="password-input">
					<div class="input-group-append">
						<div class="input-group-text">
							<input type="checkbox" id="show-password-toggle">
							<label for="show-password-toggle" id="show-password-label">Show</label>
						</div>
					</div>
					</div>
				</div>
				<script>
    const passwordInput = document.getElementById('password-input');
    const showPasswordToggle = document.getElementById('show-password-toggle');
    const showPasswordLabel = document.getElementById('show-password-label');

    showPasswordToggle.addEventListener('change', function() {
        if (this.checked) {
            passwordInput.type = 'text';
            showPasswordLabel.innerHTML = 'Hide';
        } else {
            passwordInput.type = 'password';
            showPasswordLabel.innerHTML = 'Show';
        }
    });
</script>

<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'include/footer.php' ?>
