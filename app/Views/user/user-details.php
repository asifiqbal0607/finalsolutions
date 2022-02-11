
<body>
	
			<!-------------edit profile section----------->
	<br />
	<div class="container-fluid">
		<h4 style="padding: 20px" class="bg-light text-center text-danger">Users Details</h4>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3 ud-links">
				<h5 class="text-center ud-hd5">Admin Dashboard</h5>

				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/home/orders">Orders</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/home/queries">Queries</a></p>
				<p style="margin-bottom: 0px" class="first-p"><a href="<?php echo base_url(); ?>/home/userdetails">Users Details</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/home/pricepage">Edit Pages</a></p>
				<p style="margin-bottom: 0px"><a href="<?php echo base_url(); ?>/">Log out</a></p>
			</div>
			<div class="col-md-9">
				<div class="container">
					<form>
						<div class="row select-slot">
							<div style="padding-left: 0px;" class="col-3">
							<select>
								<option>Search By Date</option>
								<option>Today</option>
								<option>Tomorrow</option>
								<option>1 weak</option>
								<option>2 weaks</option>
								<option>3 weaks</option>
								<option>4 weaks</option>
							</select>

							</div>
						</div>
					</form>
				</div>
				<div style="border: solid 1px #bbb; padding: 50px 10px;" class="container">
				<table id="example" class="display" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Client Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Password</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Edinburgh broad</td>
								<td>10/11/2021</td>
								<td>20/11/2021</td>
								<td>/-=@$#njklns</td>
								<td><a href="">Remove</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Edinburgh broad</td>
								<td>10/11/2021</td>
								<td>20/11/2021</td>
								<td>9034[].53/.,</td>
								<td><a href="">Remove</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Edinburgh broad</td>
								<td>10/11/2021</td>
								<td>20/11/2021</td>
								<td>//-90-0kjfsd</td>
								<td><a href="">Remove</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Edinburgh broad</td>
								<td>10/11/2021</td>
								<td>20/11/2021</td>
								<td>jddht092r</td>
								<td><a href="">Remove</a></td>
							</tr>
						</tbody>
					</table>				
				</div>
			</div>
		</div>
	</div>

	
	
	
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

