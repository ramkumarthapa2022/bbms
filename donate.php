<head>
<link rel="stylesheet" type="text/css" href="donatestyle.css">
</head>
<?php 
  //include header file
  include ('include/header.php');
?>
<!-- donate section -->
<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						Donating blood is important because it can save lives. Blood is needed for a wide range of medical procedures, including surgeries, 
						cancer treatments, and treating medical conditions such as anemia and blood disorders. When you donate blood, you are helping to ensure 
						that there is a sufficient supply of blood for those who need it.
						Donating blood is an important act of kindness and generosity that can make a significant difference in the lives of others.
					</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>

					
					<hr class="red-bar">
					

    <!-- Error Messages -->

				<form class="form-group" action="donorsignupprocess.php" method="post" novalidate= "">
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" name="name" id="name" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
						
					</div><!--full name-->
					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
			  
            </div><!--End form-group-->
			
			
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Fe-male<input type="radio" name="gender" id="gender" value="Fe-male" style="margin-left:10px;">
									  
								</div><!--gender-->
					
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>

            </div><!--End form-group-->
			
			<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
					
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" value="" placeholder="98********" class="form-control" required pattern="^\d{10}$" title="10 numeric characters only" maxlength="10">
			  
			</div><!--End form-group-->
			
					<div class="form-group">
				<label for="city">City</label>
				<select name="city" id="city" class="form-control demo-default" required>
				<option value="">-- Select --</option>
				<optgroup title="Kaski(Pokhara)" label="&raquo; Kaski(Pokhara)"></optgroup>
				<option value="Ranipauwa" >Ranipauwa</option>
				<option value="Mahendrapool" >Mahendrapool</option>
				<option value="New Road" >New Road</option>
				<option value="Bagar" >Bagar</option>
				<option value="Hospital chowk" >Hospital chowk</option>
				<option value="Sarangkot" >Sarangkot</option>
				<option value="Lakeside" >Lakeside</option>
				<option value="Lekhnath" >Lekhnath</option>
				<option value="Lamachaur" >Lamachaur</option>						
				<optgroup title="Kathmandu" label="&raquo; Kathmandu"></optgroup>
				<option value="Kalanki" >Kalanki</option>
				<option value="Balkhu" >Balkhu</option>
				<option value=kritipur" >kritipur</option>
				<option value="Swayambhu" >Swayambhu</option>
				<option value="Sitapaila" >Sitapaila</option>
				<option value="Balaju" >Balaju</option>
				<option value="Pashupatinath" >Pashupatinath</option>
				<option value="Boudha" >Boudha</option><option value="New Baneshwor" >New Baneshwor</option><option value="Basantapur" >Basantapur</option>
				<option value="Patan" >Patan</option><option value="NewRoad" >NewRoad</option><option value="Bhaktapur" >Bhaktapur</option><option value="Lalitpur" >Lalitpur</option>
				<optgroup title="Chitwan" label="&raquo; Chitwan"></optgroup><optgroup title="Dang" label="&raquo; Dang"></optgroup>
				<optgroup title="Jhapa" label="&raquo; Jhapa"></optgroup>
				<optgroup title="Palpa" label="&raquo; Palpa"></optgroup>
				<optgroup title="Mustang" label="&raquo; Mustang"></optgroup>
				<optgroup title="Dolpa" label="&raquo; Dolpa"></optgroup>
				<optgroup title="Lamjung" label="&raquo; Lamjung"></optgroup>
				<optgroup title="Myagdi" label="&raquo; Myagdi"></optgroup>
				</select>
            </div><!--city end-->
			
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern=".{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern=".{6,}">
			  
			</div><!--End form-group-->
			
            <div class="form-inline">
              <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I agree to donate my blood and show my Name, Contact No. and E-Mail in Blood donors List</b></span>
            </div>
			<!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>
<?php
  include ('include/footer.php');
?>