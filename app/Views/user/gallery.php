
<body>
		<!-------------topbar start------------>
	<!-------------Gallery section----------->
	
	<br />
	<h3 style="padding: 20px" class="bg-light text-center text-danger">Our Gallery</h3>
	<br />
	<div class="container">
		<div class="row galry">
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row galry">
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
		</div>
	</div>
	<br />
	<div class="container">
		<div class="row galry">
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
			</div>
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>/assets/images/b6.png" width="100%" alt="img" />
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

