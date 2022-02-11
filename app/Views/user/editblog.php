
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

				<p style="margin-bottom: 0px; font-size: 15px"><a href="<?php echo base_url(); ?>/home/pricepage">Edit Pricing Plan</a></p>
				<p style="margin-bottom: 0px; font-size: 15px" class="first-p"><a href="<?php echo base_url(); ?>/home/editblog">Edit Blog Page</a></p>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="container  edit-inpt">
							<form>								
                                <span style="padding-left: 0px; margin-bottom: 5px">Heading-1</span>
                                <input type="text" name="s_name" />
                                <span style="padding-left: 0px; margin-bottom: 5px">Paragraph-1</span><br>
                                <textarea style="width: 100%; height: 200px; border-radius: 10px" id="w3review" name="w3review" rows="4" cols="50"></textarea><br> <br><br>
                                <span style="padding-left: 0px; margin-bottom: 5px">Heading-2</span>
                                <input type="text" name="s_name" />
                                <span style="padding-left: 0px; margin-bottom: 5px">Paragraph-2</span><br>
                                <textarea style="width: 100%; height: 200px; border-radius: 10px" id="w3review" name="w3review" rows="4" cols="50"></textarea><br><br><br>
                                <span style="padding-left: 0px; margin-bottom: 5px">Heading-3</span>
                                <input type="text" name="s_name" />
                                <span style="padding-left: 0px; margin-bottom: 5px">Paragraph-3</span><br>
                                <textarea style="width: 100%; height: 200px; border-radius: 10px" id="w3review" name="w3review" rows="4" cols="50"></textarea><br><br><br>  

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

