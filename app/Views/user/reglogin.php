
<body>
		<!-------------topbar start------------>
	
	<!-------------blog section----------->
	
	<br />
	<div class="container-fluid">
		<img src="<?php echo base_url(); ?>/assets/images/b16.jpg" width="100%" alt="img" />
	</div>	
	<br><br>
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 form-sin">
				<h3 >LOG <span class="text-danger">IN</span></h3>
				<form>
					<span>Email</span><br>
					<input class="inputs" type="email" name="email" placeholder="Enter your email" /><br>
					<span>Password</span><br>
					<input class="inputs" type="password" name="password" placeholder="Enter your password" /><br>
					<span><input type="checkbox" name="remember" /> &nbsp;Remember Me?</span><br>
					<button type="submit">LOG IN</button><br>
					<button class="bt-l2" type="submit">LOG IN WITH GOOGLE <i class="fa fa-google"></i></button>
					<button class="bt-l2" type="submit">LOG IN WITH FACEBOOK <i class="fa fa-facebook"></i></button>
					<a href="<?php echo base_url(); ?>/home/forgot"><button class="bt-l2" type="submit">FORGOT PASSWORD?</button></a>
					
				</form>
			</div>
			<div class="col-md-8 reg-s2 ">
				<h4 style="margin-bottom: 20px">Register New Account</h4>
				<div class="regs2-main">
				<div class="row">
					<div class="col-md-6">
						<span>First Name</span>
						<input type="text" name="f_name" placeholder="Enter your first name" />
					</div>
					<div class="col-md-6">
						<span>Last Name</span>
						<input type="text" name="l_name" placeholder="Enter your Last name" />
					</div>
				</div>
						<span>Phone Number</span>
						<input type="number" name="p_nubmber" placeholder="Enter your phone number" /><br>
						<span>Email</span>
						<input type="email" name="email" placeholder="Enter your email address" /><br>
						<span>Password</span>
						<input type="password" name="password" placeholder="Enter your password" /><br>
						<span>Re-enter Password</span>
						<input type="password" name="r_password" placeholder="Re enter Password" /><br>
						<button style="background: #EB002B; color: #fff" type="submit">CREATE MY ACCOUNT</button><br>
						<button type="submit">REGISTER WITH GOOGLE <i class="fa fa-google"></i> </button>	<br>
						<button type="submit">REGISTER WITH FACEBOOK <i class="fa fa-facebook"></i> </button>	<br>
			
			</div>
			</div>	
		</div>
	</div>
	
	
			<!-------------footer----------->
	<br/><br/><br/><br/>
	
	
	
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("bars").style.opacity ="0";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("bars").style.opacity ="100";
}
</script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
	
</body>
</html>

