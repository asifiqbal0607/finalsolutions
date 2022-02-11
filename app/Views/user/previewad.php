
<body>
	<!-------------blog section----------->
	<br>	
	<div class="container-fluid bg-light">
		
		<h4 style="padding: 20px" class=" text-center text-danger">Preview your Ad</h4>
	</div>
	<br />
	<div class="container">
		<div class="row pre-responsive">
			<div class="col-lg-6 ">
			<div class="container">
				<div class="pre-img-1">
					<div class="pre-div">
                        <img src="<?php echo base_url(); ?>/assets/images/bb12.jpg" />
                    </div>
				</div>	
			</div>
			
			</div>
			<div class="col-lg-6">
			<div class="container">
				<div class="pre-img">
					<div class="pre-div-1">
                    <img src="<?php echo base_url(); ?>/assets/images/bb12.jpg" />
                    </div>
				</div>	
			</div>
			
			</div>
		</div>
	</div>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 msgb">
				
					<textarea name="message" placeholder="Please enter your message here"></textarea>
					<a href="<?php echo base_url(); ?>/home/reglogin"><button >Proceed to Pay >></button></a>
				
			</div>
			<div class="col-md-3"></div>
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

