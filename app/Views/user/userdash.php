
<body>
	<!-------------userd section----------->
	<br />
	<div class="container-fluid">
		<h4 style="padding: 20px" class="bg-light text-center text-danger">Pending Order</h4>
	</div>
	<br>
	
	<div class="container">
		<div class="row">
			<div style="padding: 0px" class="col-md-3 ud-links bg-light">
				<h5 class="text-center ud-hd5">User Dashboard</h5>
				<h6 class="text-center un-h6">User Name</h6>
				
				<p style="margin-bottom: 0px" class="first-p"><a href="<?php echo base_url(); ?>/home/userdash">Pending Order</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/home/orderhistory">Order History</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/home/userlivead">Live Ads</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/home/editprofile">Edit Profile</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/">Log out</a></p>
			</div>
			<div class="col-md-9">
			<div class="row">
				<div class="col-md-6 ud-card-p">
					<div class="ud-card">
					<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
					<form>
						
						<div class="row uc-input">
							<div class="col-6">
								<span style="font-size: 15px; padding-bottom: 2px">Start Date</span>
								<input type="text" id="checkin" placeholder="Start Date" />
							</div>
							<div class="col-6">
								<span style="font-size: 15px; padding-bottom: 2px">End Date</span>
								<input type="text" id="checkout" placeholder="End Date" />
							</div>
						</div>
						<div class="row uc-input">
							<div class="col-6">
								<span style="font-size: 15px; padding-bottom: 2px">Budget</span>
								<input type="text" name="s-date"  />
							</div>
							<div class="col-6">
								<span style="font-size: 15px; padding-bottom: 2px">Status</span>
								<input type="text" name="e-date" />
							</div>
						</div>
						<div class="row uc-button">
							<div class="col-6">
								<button type="submit"><i class="fa fa-pencil"></i> Edit</button>
							</div>
							<div class="col-6">
								<button type="submit"><i class="fa fa-times"></i> Remove</button>
							</div>
						</div>
					</form>
					</div>	
				</div>	
				<div class="col-md-6 ud-card-p">
				</div>			
				</div>
			
			</div>
		</div>
	</div>

	
	
	
			<!-------------footer----------->
	<br/><br/><br/>
	
	
	
	
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

