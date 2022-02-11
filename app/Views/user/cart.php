
<body>
	<!-------------bslot section----------->
	
	<br />
	<div class="container-fluid">
		<img src="<?php echo base_url(); ?>/assets/images/b14.jpg" width="100%" alt="img" />
	</div>	
		<br /><br />
	<div class="container">
		<h3>Order Your Ad Campaign</h3>	
		<div style="padding: 30px;" class="row bg-light">
			<div class="container">
			<h5>Note about Billing:</h5>
			<p>All orders are invoiced on a monthly basis. Payment is processed automatically using a payment method on file. No payment is collected during checkout.</p>
			</div>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="text-danger container">Delete Selected Items</p>
					</div>
					<div class="col-6">
						<p style="text-align: right">Price</p>
					</div>
				</div>
			</div>
			<div class="vl"></div>
			<br>
			<div class="container">
				<div class="row">
					<div class="col-md-1">
						<br><br><br>
						<input style="margin-left: 30px" type="checkbox" name="select" />
					</div>
					<div class="col-md-3">
						<img src="<?php echo base_url(); ?>/assets/images/1 b.jpeg" width="100%" alt="img" />
					</div>
					<div class="col-md-6">
						<h5 class="text-danger">1057 WHALLEY AVE, NEW HAVENCT, 06515</h5>
						<p>Milledgeville Rd, Augusta GA, 11' x 22' screen</p>
						<h6>Half Slot at $15.00 / Day for 9 Days</h6>
						<p>2/2/2022 - 2/10/2022</p>
						<a class="text-danger" href="#" >Delete</a>
					</div>
					<div class="col-md-2">
						<h5 style="text-align: right">$135.00</h5>
					</div>
				</div>
			</div>
			
			<div class="vl-1"></div>
			<div class="container">
				<p style="padding-top: 20px; text-align: right">Subtotal (1 item):<b>$135.00</b></p>
			</div>
			<div class="vl-2"></div>
			<div class="container">	
				<div class="row">
					<div class="col-6">
						
						<p style="margin-top: 17px;">Discount</p>	
					</div>
					<div class="col-6 dcnt-form">
						<form>
							<button style=" float: right" type="submit">Apply</button>&nbsp;&nbsp;
							<input style="float: right; margin-right: 10px " type="text" name="discount" placeholder="Discount" />&nbsp;&nbsp;

						</form>
					</div>
				</div>
			</div>
			<div class="vl-2"></div>
			<div class="container">
				<p style="text-align: right; margin-top: 10px;">Total (1 item): <b>$135.00</b></p>
				<p>Improve your campaign's reach - add opposing traffic direction</p>
			</div>
			<div class="vl-2"></div>
			<br />
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<img src="<?php echo base_url(); ?>/assets/images/2b.jpeg" width="100%" alt="img" />
					</div>
					<div class="col-md-4">
						<h6>Milledgeville Rd Southbound Left Read</h6>
						<p>2/2/2022 - 2/10/2022</p>
					</div>
					<div class="col-md-6">
						<h6>10% Off Entire Order</h6>
						<button class="cart-2l-btn" type="submit">Add to carts</button>
					</div>
				</div>
			</div>
			
		</div>
		<br>
		<div class="container clast-btn">
			<a href="<?php echo base_url(); ?>/home/previewad"><button style="float: right" type="submit">PROCEED TO CHECK OUT</button></a>
			<a href="<?php echo base_url(); ?>/home/serchslot"><button style="float: right; margin-right: 20px" type="submit">CONTINUE SEARCHING</button></a>
		</div>
	</div>
			<!-------------footer----------->
	<br/><br/><br/><br/><br/><br/>
    
	
	
	
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

