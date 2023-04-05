<?php if(isset($termError)) echo $termError;
					if(isset($submitSuccess)) echo $submitSuccess;
					$submitError = "";
					if(($submitError)) echo $submitError;

					?>
<?php if(isset($dayError)) echo $dayError; ?>
			<?php if(isset($monthError)) echo $monthError; ?>
			<?php if(isset($yearError)) echo $yearError; ?>
			<?php if(isset($passwordError)) echo $passwordError; ?><?php if(isset($nameError)) echo $nameError; ?>
            <?php if(isset($emailError)) echo $emailError; ?><?php if(isset($contact_noError)) echo $contact_noError; ?><?php if(isset($cityError)) echo $cityError; ?>
            
            <?php if(isset($blood_groupError)) echo $blood_groupError; ?><?php if(isset($genderError)) echo $genderError;  ?>
<?php
if(isset($_POST['submit'])){
	if(isset($_POST['term']) ===true){
  if(isset($_POST['name']) && !empty($_POST['name'])){
	if(preg_match("/^[A-Za-z\s]+$/", $_POST['name'])){
      $name= $_POST['name'];
	}else{
		$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Only lower and upper case and space characters are allow.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
	}
}else{
	$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill the name field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
}
if(isset($_POST['gender']) && !empty($_POST['gender'])){
	$gender = $_POST['gender'];
	}else{
	$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select your gender.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
}
if(isset($_POST['day']) && !empty($_POST['day'])){
	$date = $_POST['day'];
	}else{
	$dateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please select your date input.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		  }
if(isset($_POST['month']) && !empty($_POST['month'])){
			$month = $_POST['month'];
			}else{
			$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please select your month input.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
				  }
if(isset($_POST['year']) && !empty($_POST['year'])){
					$year = $_POST['year'];
					}else{
					$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Please select your year input.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
						  }
						  if(isset($_POST['blood_group']) && !empty($_POST['blood_group'])){
							$blood_group = $_POST['blood_group'];
							}else{
							$blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Please select your blood_group input.</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>';
							}
                           if(isset($_POST['city']) && !empty($_POST['city'])){
							if(preg_match("/^[A-Za-z\s]+$/", $_POST['city'])){
							  $city= $_POST['city'];
							}else{
								$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Only lower and upper case and space characters are allow.</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>';
							}
						}else{
							$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Please fill the city field.</strong>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>';
						}
if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
	if(preg_match("/\d{10}/", $_POST['contact_no'])){
	  $contact= $_POST['contact_no'];
	}else{
		$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Contact should consist of 10 characters.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
	}
}else{
	$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill contact_no feild.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
}
if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && 
						!empty($_POST['c_password'])){
							if(strlen($_POST['password'])>=6){
								if($_POST['password'] == $_POST['c_password']){
									$password = $_POST['password'];
								    }else{
										$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Password are not same. </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
									}
							}else{
                     $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>The password should consist of 6 characters.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
						  }
				}else{
					$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Please fill password field. </strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>';
				  }
				  if(isset($_POST['email']) && !empty($_POST['email'])){
					$pattern ='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
					if(preg_match($pattern, $_POST['email'])){
						$check_email= $_POST['email'];
						$sql ="SELECT email FROM donor WHERE email='$check_email' ";
						$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)>0){
							$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Sorry this email is already exixts.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
						}else{
							$email= $_POST['email'];
						}
					}else{
						$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Please enter valid email address.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
					}
				}else{
					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Please fill the email field.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
				}
     
				if(mysqli_query($conn,$sql)){
					$submitSuccess = '<div class="alert alert-Success alert-dismissible fade show" role="alert">
							<strong>Data inserted successfully.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
				}

				}else{
					$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Data not inserted Try again.</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>';
				}
					
				}

			else{

		    $termError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please agree with our terms and conditions.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
          }


?>