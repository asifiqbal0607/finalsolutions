
<body>
		<!-------------topbar start------------>
	
	<!-------------pricing plan----------->
	
	<br />
		<h3 style="padding: 20px" class="bg-light text-center">PRICE PLAN</h3><br />
	<div class="container">
		<h4 class="text-center text-danger">Metro Ads Price Plan</h4>
		<div class="row cardp-row">
			<div class="col-md-4 card-p-prt">
				<div class="card-p">
					<img src="<?php echo base_url(); ?>/assets/images/b3.jpg" width="100%" alt="image">
					<h6 class="text-center text-danger">Half Slot (2 Weaks)</h6>
					<p class="text-center">7.5 Seconds every 2 Minutes </p>
					<p class="text-center">720 Impressions every Day</p>
					<h6 class="text-center">Starts at $13.50 / Day</h6>
					<a class="bg-danger text-center text-white srch-p-btn" href="#">Select Slot</a>
					<br/><br />
				</div>
			</div>
			<div class="col-md-4 card-p-prt">
				<div class="card-p">
					<img src="<?php echo base_url(); ?>/assets/images/b4.jpg" width="100%" alt="image">
					<h6 class="text-center text-danger">Full Slot  (4 Weaks)</h6>
					<p class="text-center">7.5 Seconds every time </p>
					<p class="text-center">1,440 Impressions every Day</p>
					<h6 class="text-center">Starts at $26.50 / Day</h6>
					<a class="bg-danger text-center text-white srch-p-btn" href="#">Select Slot</a>
					<br/><br />
				</div>
			</div>
			
			<div class="col-md-4 card-p-prt">
				<div class="card-p">
					<img src="<?php echo base_url(); ?>/assets/images/b4.jpg" width="100%" alt="image">
					<h6 class="text-center text-danger">Custom Slot</h6>
					<p class="text-center">7.5 Seconds every 2 minutes</p>
					<p class="text-center"> 720 Impressions every Day </p>
					<h6 class="text-center">Starts at $7.50 / Day</h6>
					<a class="bg-danger text-center text-white srch-p-btn" href="<?php echo base_url(); ?>/home/contact">Contact us</a>
					<br/><br />
				</div>
			</div>
		</div>
	</div><br /><br />
	
	
	
	
	
			<!-------------footer----------->
	<br/><br/>

	
	
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

