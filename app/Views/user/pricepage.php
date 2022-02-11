
<body>
	
			<!-------------edit profile section----------->
	<br />
	<div class="container-fluid">
		<h4 style="padding: 20px" class="bg-light text-center text-danger">Edit Pricing</h4>
	</div>
	<br>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3 ud-links bg-light">
				<h5 class="text-center ud-hd5">Admin Dashboard</h5>

				<p style="margin-bottom: 0px; font-size: 15px" class="first-p"><a href="<?php echo base_url(); ?>/home/pricepage">Edit Pricing Plan</a></p>
				<p style="margin-bottom: 0px; font-size: 15px"><a href="<?php echo base_url(); ?>/home/editblog">Edit Blog Page</a></p>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="container  edit-inpt">
							<form>
								<div class="container">
								<div class="row select-slot">
									<div class="col-md-6">
										<select>
											<option>Half Slot</option>
											<option>Full Slot</option>
										</select>
									</div>
									<div class="col-6">
										<a class="mng-slot" href="#">Manage Slot</a>
									</div>
								</div>
								</div>
								
								
										<span style="padding-left: 5px">Slot Name</span>
										<input type="text" name="s_name" />
										<span style="padding-left: 5px">Time</span>
										<input type="number" name="time" />
										<span style="padding-left: 5px">Impressions</span>
										<input type="text" name="impression" />
										<span style="padding-left: 5px">Price</span>
										<input type="text" name="price"  />
                                        <br><br>
								<div class="btnedit">
										<button type="submit">Save all</button>
								</div>
								<br>

							</form>
						</div>
					</div>
					<div class="col-md-1"></div>
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

