
<body>
	<!-------------srch slot section----------->
	
	<br />
	<div class="container-fluid">
		<img src="<?php echo base_url(); ?>/assets/images/b13.jpg" width="100%" alt="img" />
	</div>	
<br /><br />
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="container bg-light srch-form">
					<span>SEARCH</span>
					<h5 class="text-danger">YOUR AD SPACE</h5>
					
						<span>Start Date</span>
						<input  type="text" id="checkin" name="s_date" placeholder="Start Date" />
						<span>End Date</span>
						<input type="text" id="checkout" name="e_date" placeholder="End Date" />
						<span>Select Location</span>
						<select>
							<option>All Location</option>
							<option>Lorem Ipsum</option>
						</select>
						<span>Select Price</span>
						<select>
							<option>All pricing plan</option>
							<option>Half</option>
							<option>Full</option>
							<option>Quarter</option>
						</select>
						<a href="<?php echo base_url(); ?>/home/selectslot"><button>Search Slot</button></a>

					
				</div>
			</div>
			<div class="col-md-8 ">
				<h4>Available Slot</h4>
					<div class="container">
					<div class="row pop">
					<span>PLEASE CHECK THE START AND END DATE. YOU MUST PROVIDE A DATE RANGE TO CHECK AVAILABILITY. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<i class="fa fa-times"></i>
				</div>
				</div>
				<br>
				<div class="container refine-2">
					<br>
					<h4>Refine your search</h4>
					<p>From here you can find an available time slot for your advertising campaign. Select a start and end date and our system will look for available time slots that you can use.</p>
					<div class="row">
						<div class="col-md-6">
						
					<h4>Locations</h4>
					<h6>WHALLEY AVE, NEW HAVEN CT</h6>
					<p>Two-way billboard along the Milledgeville corridor in Augusta.</p>
					<p>Daily Effective Circulation: 28,500</p>
					<ul>
						<li>Located near a traffic light</li>
						<li>Located near a school</li>
					</ul>
					<a style="font-size: 14px;" href="#"><i class="fa fa-map-marker text-danger">1057 WHALLEY AVE, NEW HAVEN CT, 06515</i></a>
					</div>
					<div class="col-md-6">
						<img src="<?php echo base_url(); ?>/assets/images/2b.jpeg" width="100%" alt="img"/>
					</div>
				</div>
					<br><br>
					<div class="container">
						<h4>Pricing Types</h4>
						
						<span style="color: #555">Full Slot 1,440 impressions per day</span><br>
						<span style="color: #555">Half Slot: 720 impressions per day</span><br>
						<span style="color: #555">Quarter Slot: 360 impressions per day</span><br>
					</div>
				<br>
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

