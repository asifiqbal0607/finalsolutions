
<body>
	
	
	<!-------------payment section----------->
	
	<br />
	<div class="container-fluid">
		<h4 style="padding: 20px" class="bg-light text-center text-danger">Forgot password</h4>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="container pay-main">
						<h5 class="text-center">Pay Balance</h5>
                        <br/>
						<div class="container">
						<form>
							<h6 style="padding-left: 10px;">Your Ad Amount</h6>
							<input style="padding-left: 15px;" class="amount-pay" type="text" name="amount" placeholder="Enter you ad amount" /><br/><br/>
							<h6 style="padding-left: 10px;">Add Payment Method</h6>
							<div class="row card-pay">
								<div class="col-6">
									<i class="fa fa-cc-visa"></i>
									<i class="fa fa-cc-mastercard"></i>
								</div>
								<div class="col-6">
									<input style="float: right" type="radio" name="card" />
								</div>
							</div>
							<div class="row card-pay">
								<div class="col-6">
									<i class="fa fa-cc-paypal"></i>
								</div>
								<div class="col-6">
									<input style="float: right" type="radio" name="card" />
								</div>
							</div>
							
							<div class="container card-d">
							<h6>Card Details</h6>
							<span style="padding-left: 8px;">Name on Card</span>
							<input style="padding-left: 15px;" type="text" name="c_name" placeholder="Enter your name on card" />
							<span style="padding-left: 8px;">Number On Card</span>
							<input style="padding-left: 15px;" type="number" name="number" placeholder="Enter your card number" />
							<div class="row">
								<div class="col-md-6">
									<input style="padding-left: 15px;" type="number" name="number" placeholder="Enter expiry date" />
								</div>
								<div class="col-md-6">
									<input style="padding-left: 10px;" type="number" name="number" placeholder="Enter CVV number" />
								</div>
							</div>
									<button type="submit">Pay Now</button>
								<br>
								<br>
								<br>
						</div>
							
						</form>
						</div>
					</div>
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

