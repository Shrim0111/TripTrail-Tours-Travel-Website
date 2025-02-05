<?php     
include('include\header.php');
?>

	<div class="container-fluid">
		<h2 class="form-heading p-4" style="text-align:center; color: red;">Book Now</h2>
		
		
			<form action="controllor/controllor.php" method="post" enctype="multipart/form-data">
					<div class="col-md-6 offset-3">
						<div class="form-group mt-3">
							<label>First Name</label>
							<input type="text" class="form-control" name="fname" placeholder="Enter First Name" required id="fname">
							<p id="fname_error" class="error"></p>
						</div>
						<div class="col-md-6 w-100">
							<div class="form-group mt-3 " >
								<label>Last Name</label>
								<input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required id="lname" >
								<p id="lname_error" class="error"></p>
							</div>
							<div class="col-md-6 w-100">
								<div class="form-group mt-3">
									<label>Contact</label>
									<input type="number" class="form-control " name="contact" placeholder="+91 0000 0000 00" required id="contact">
									<p id="contact_error" class="error"></p>
								</div>
								<div class="col-md-6 w-100">
									<div class="form-group  mt-3">
										<label>Email</label>
										<input type="text" class="form-control" name="email" placeholder="Enter Email" required id="email">
										<p id="email_error" class="error"></p>
									</div>
										<div class="col-md-6 w-100">
											<div class="form-group mt-3">
												<label>How Many?</label>
												<input type="number" class="form-control" name="pnumber" placeholder="Enter number of members" required  id="pname">
												<p id="pname_error" class="error"></p>
												
											</div>
											<div class="col-md-6 w-100">
												<div class="form-group mt-3">
													<label>Where to Go?</label>
													<input type="text" class="form-control" name="pname" placeholder="Enter name of place" required  id="pname">
													<p id="pname_error" class="error"></p>
												</div>
                                                <div class="col-md-6 w-100">
												<div class="form-group mt-3">
													<label>Arrival Date</label>
													<input type="date" class="form-control" name="pdate" placeholder="Select Arrival Date" required  id="pdate">
													<p id="pdate_error" class="error"></p>
												</div>
                                                <div class="col-md-6 w-100">
												<div class="form-group mt-3">
													<label>Leaving Date</label>
													<input type="date" class="form-control" name="ldate" placeholder="Select Leaving Date" required  id="ldate">
													<p id="ldate_error" class="error"></p>
												</div>
												<div class="form-group mt-5">
													<button type="submit" name="signup" class="btn btn-success w-65" style="background-color:#fb8b23;" >Submit</button>
												</div>
											</div></div></div></div></div></div></div>
									</form>
								</div>
							</div>
						</body>
						</html>
