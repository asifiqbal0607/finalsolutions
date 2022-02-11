
<body>
	
	<!-------------Contact section----------->
	
	
	<div class="container-fluid">
		<img src="<?php echo base_url(); ?>/assets/images/b12.jpg" width="100%" alt="img" />
	</div>
	<br /><br />
	<div class="container">
		<div class="row">
			<div class="col-md-5 form-left-pic for-desk-cnt">
				<h4 class="text-white ">LET'S DISCUSS YOUR BRAND ADVERTISEMENT</h4>
				<br />
				<div class="row resp-row">
					<div class="col-6 text-white">
						<h6>Phone Number</h6>
						<p>19.120.4590 <br />+19 111 22222</p>
					</div>
					<div class="col-6 text-white">
						<h6>Mail us</h6>
						<p>info@outmedia.com</p>
					</div>
				</div>
				<div class="text-white">
						<h6>Address</h6>
						<p>541 Melville Ave, Palo Alto, 4301, United States</p>
				</div>
				
				<div class="row">
					<div class="col-3"></div>		
							
				<div class="col-7">
				<div class="row text-white">
					
					<div class="col-2"><i class="fa fa-facebook"></i></div>
					<div class="col-2"><i class="fa fa-instagram"></i></div>
					<div class="col-2"><i class="fa fa-twitter"></i></div>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-7 bg-light">
				<br />
				<div class="container">
				<form>
						<h5 style="margin-left: 15px; color: #E9002B">Contact us</h5>

					<div class="row">
						<div class="col-md-6 fbox">
							<span>First Name</span><br>
							<input type="text" name="f_name" placeholder="Enter you first name" />
						</div>
						<div class="col-md-6 fbox">
							<span>Last Name</span><br>
							<input type="text" name="l_name" placeholder="Enter you last name" />
						</div>
					</div>
					<div class="fbox">
						<span>Email</span><br>
						<input type="email" name="emal" placeholder="Enter your email address" />
					</div>
					<div class="fbox">
						<span>Phone Number</span><br>
						<input type="email" name="emal" placeholder="Enter your phone number" />
					</div>
					<div class="fbox">
						<span>Message</span><br>
						<textarea name="msg" placeholder="type here your subject"></textarea>
					</div>
					<div class="fbox-btn">
						<input type="submit" Value="Send Message" />
						<br><br>
					</div>
				</form>
				</div>
			</div>
			<br>
			<div class="col-md-5 form-left-pic for-mobile-cnt">
				
				<h4 class="text-white ">LET'S DISCUSS YOUR BRAND ADVERTISEMENT</h4>
				<br />
				<div class="row resp-row">
					<div class="col-6 text-white">
						<h6>Phone Number</h6>
						<p>19.120.4590 <br />+19 111 22222</p>
					</div>
					<div class="col-6 text-white">
						<h6>Mail us</h6>
						<p>info@outmedia.com</p>
					</div>
				</div>
				<div class="text-white">
						<h6>Address</h6>
						<p>541 Melville Ave, Palo Alto, 4301, United States</p>
				</div>
				
				<div class="row">
					<div class="col-3"></div>		
							
				<div class="col-7">
				<div class="row text-white">
					
					<div class="col-2"><i class="fa fa-facebook"></i></div>
					<div class="col-2"><i class="fa fa-instagram"></i></div>
					<div class="col-2"><i class="fa fa-twitter"></i></div>
					</div>
				</div>
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

