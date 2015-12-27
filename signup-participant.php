<!DOCTYPE html>
<html>
<head>

	<title>T9Hacks - Sign-up</title>
	
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS -->
	<?php include "includes/css.php" ?>
	
</head>
<body id="page-top" class="index hackathon">

	<!-- Navigation -->
	<?php include "includes/nav-simple.php" ?>
	
	
	<section id="signup-wait" class="bg-purple">
		<div class="container">
		
			<div class="row">
				<div class="column12">
					<div class="team-title">
						<h1>Sign-up for T9Hacks</h1>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="signupWrapper">
				<div class="column12">
					<div class="waitMessage">
						<p>Thank you for your interest in T9Hacks!  We will begin the registration process on Jan 1, 2016.</p>
						<br/>
						<br/>
						<a href="index.html" class="btn btn-l">Back to Website</a>
					</div>
				</div>
				</div>
			</div>
			
		</div>
	</section>
	
	
	<section id="signup" class="bg-purple">
		<div class="container">
		
			<div class="row">
				<div class="column12">
					<div class="team-title">
						<h1>Sign-up for T9Hacks</h1>
					</div>
				</div>
			</div>
			
			<div class="row" id="signupChoice">
				<div class="signupWrapper">	
					<div class="row">			
						<p class="column12">
							If you are planning on attending T9Hacks, we kindly ask you to register.  This lets allows us to keep track of 
							tickets to make sure that we can provide enough space, food, and supplies for everyone!  
						</p>
					</div>
					<div class="row">	
						<p class="column4 beta">
							If you are a student, click here:
						</p>	
						<div class="column8 omega btnHolder"><div class="btn btn-xl" id="participantBtn">Register as a participant</div></div>
					</div>
					<div class="row">	
						<p class="column4 beta">
							If you are an external volunteer, click here:
						</p>
						<div class="column8 omega btnHolder"><div class="btn btn-xl" id="mentorBtn">Sign-up as a mentor</div></div>
					</div>
				</div>
			</div>
		
			<div class="row" id="participantSignup">
				<div class="signupWrapper">
					<div id="participantLoading" class="signupLoading"><i class="fa fa-spinner fa-pulse"></i></div>
					<div id="participantSuccess" class="signupSuccess">Null</div>
					<form id="participantForm" class="signupForm" action="signup/register.php" method="post" enctype="multipart/form-data">
					
						<div class="row">
							<p class="column12">
								To register we need your name and email.  Please register with your university email account.
							</p>
							
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-user"></i><input type="text" placeholder="Name" name="name" id="pname"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-envelope-o"></i><input type="text" placeholder="Email" name="email" id="pemail"/></div>
							</div>
						</div>
						
						<div class="row">
							<p class="column12">
								By participating in T9Hacks, you get special access to our sponsors, their recruiters, and 
								additional technology opportunities.  We will never allow the sale of your information to any third-parties.
							</p>
							
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-linkedin"></i><input type="text" placeholder="Linkedin" name="linkedin"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput" id="upload">
									<i class="fa fa-file-text-o"></i>
									<input id="resumeName" placeholder="Upload Resume" disabled="disabled" />
									<input id="resumeUploadInput" class="upload" type="file" name="resume">
									<span id="resumeUploadBtn" class="btn btn-med" >Upload</span>
								</div>
							</div>
							<script>
								document.getElementById("resumeUploadInput").onchange = function () {
									var res = (this.value).split("\\");
									var file = res[res.length-1];
									document.getElementById("resumeName").value = file;
								};
							</script>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-globe"></i><input type="text" placeholder="Personal Website" name="website"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-github"></i><input type="text" placeholder="Github" name="github"/></div>
							</div>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-building-o"></i><input type="text" placeholder="Company/Organization" name="company"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-group"></i><input type="text" placeholder="Job Title" name="title"/></div>
							</div>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-facebook"></i><input type="text" placeholder="Facebook" name="facebook"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-twitter"></i><input type="text" placeholder="Twitter" name="twitter"/></div>
							</div>
						</div>
						
						<div class="row">
							<p class="column12">
								As part of your registeration, you will receive a free T9Hacks t-shirt.  This t-shirt will be in a standard unisex size.  
								What size would you like?
							</p>
							
							<div class="fieldWrapper column12">
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-xs' type='radio' name="shirt" value="X-Small">
	   								<label class='tgl-btn' data-tg-off='X-Small' data-tg-on='X-Small' for='shirt-xs'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-s' type='radio' name="shirt" value="Small">
	   								<label class='tgl-btn' data-tg-off='Small' data-tg-on='Small' for='shirt-s'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-med' type='radio' name="shirt" value="Medium" checked="checked">
	   								<label class='tgl-btn' data-tg-off='Medium' data-tg-on='Medium' for='shirt-med'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-lg' type='radio' name="shirt" value="Large">
	   								<label class='tgl-btn' data-tg-off='Large' data-tg-on='Large' for='shirt-lg'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-xl' type='radio' name="shirt" value="X-Large">
	   								<label class='tgl-btn' data-tg-off='X-Large' data-tg-on='X-Large' for='shirt-xl'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-xxl' type='radio' name="shirt" value="XX-Large">
	   								<label class='tgl-btn' data-tg-off='XX-Large' data-tg-on='XX-Large' for='shirt-xxl'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='shirt-none' type='radio' name="shirt" value="None">
	   								<label class='tgl-btn' data-tg-off='None' data-tg-on='None' for='shirt-none'></label>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column12">
								<a href="#" id="participantBack" class="backBtn"><i class="fa fa-angle-double-left"></i> Back</a>
								<input class="honeypot" type="text" name="honeypot"/>
								<input type="hidden" name="type" value="participant" />
								<input type="submit" id="participantSubmitBtn" class="btn btn-l right" value="Submit">
							</div>
						</div>
							
					</form>
				</div>
			</div>
			
			
			
			
			
			
			
			<div class="row" id="mentorSignup">
				<div class="signupWrapper">
					<div id="mentorLoading" class="signupLoading"><i class="fa fa-spinner fa-pulse"></i></div>
					<div id="mentorSuccess" class="signupSuccess">Null</div>
					<form id="mentorForm" class="signupForm" action="signup/register.php" method="post" enctype="multipart/form-data">
					
						<div class="row">
							<p class="column12">
								Thank you for volunteering as a mentor! To sign-up we need your name and email.
							</p>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-user"></i><input type="text" placeholder="Name" name="name" id="mname"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-envelope-o"></i><input type="text" placeholder="Email" name="email" id="memail"/></div>
							</div>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-building-o"></i><input type="text" placeholder="Company/Organization" name="company"/></div>
							</div>
							<div class="fieldWrapper column6">
								<div class="fieldInput"><i class="fa fa-group"></i><input type="text" placeholder="Job Title" name="title"/></div>
							</div>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column12 checkboxes">
								<div class="column12 alpha">
									<p>We will be providing food for everyone who comes to the hackathon.  Are you planning on bring present during: </p>
								</div>
								<div class="fieldCheckbox">
									<label class="tgl-label" for="breakfast">Breakfast</label>
									<input class='tgl tgl-flip' name="breakfast" id='breakfast' type='checkbox'>
	   								<label class='tgl-btn' data-tg-off='Nope' data-tg-on='Yeah!' for='breakfast'></label>
								</div>
								<div class="fieldCheckbox">
									<label class="tgl-label" for="lunch">Lunch</label>
									<input class='tgl tgl-flip' name="lunch" id='lunch' type='checkbox' checked="checked">
	   								<label class='tgl-btn' data-tg-off='Nope' data-tg-on='Yeah!' for='lunch'></label>
								</div>
								<div class="fieldCheckbox">
									<label class="tgl-label" for="dinner">Dinner</label>
									<input class='tgl tgl-flip' name="dinner" id='dinner' type='checkbox'>
	   								<label class='tgl-btn' data-tg-off='Nope' data-tg-on='Yeah!' for='dinner'></label>
								</div>
							</div>
						</div>
						
						<div class="row">
							<p class="column12">
								As a mentor, you will be working with groups in particular topics.  Which area(s) would you like to be a mentor for?
							</p>
							
							<div class="fieldWrapper column12 areas">
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='webDesign' type='checkbox' name="webDesign" value="Web Design">
	   								<label class='tgl-btn' data-tg-off='Web Design' data-tg-on='Web Design' for='webDesign'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='webDev' type='checkbox' name="webDev" value="Web Development">
	   								<label class='tgl-btn' data-tg-off='Web Development' data-tg-on='Web Development' for='webDev'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='android' type='checkbox' name="android" value="Android Development">
	   								<label class='tgl-btn' data-tg-off='Android Development' data-tg-on='Android Development' for='android'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='iOS' type='checkbox' name="iOS" value="iOS Development">
	   								<label class='tgl-btn' data-tg-off='iOS Development' data-tg-on='iOS Development' for='iOS'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='uiux' type='checkbox' name="uiux" value="UI/UX Design">
	   								<label class='tgl-btn' data-tg-off='UI/UX Design' data-tg-on='UI/UX Design' for='uiux'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='gaming' type='checkbox' name="gaming" value="Gaming">
	   								<label class='tgl-btn' data-tg-off='Gaming' data-tg-on='Gaming' for='gaming'></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='print' type='checkbox' name="print" value="Print Media">
	   								<label class='tgl-btn' data-tg-off="Print Media" data-tg-on="Print Media" for="print"></label>
								</div>
								<div class="fieldRadio">
									<input class='tgl tgl-flip' id='arduino' type='checkbox' name="arduino" value="Arduino/Electronics">
	   								<label class='tgl-btn' data-tg-off='Arduino/Electronics' data-tg-on='Arduino/Electronics' for='arduino'></label>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="fieldWrapper column12">
								<a href="#" id="mentorBack" class="backBtn"><i class="fa fa-angle-double-left"></i> Back</a>
								<input class="honeypot" type="text" name="honeypot"/>
								<input type="hidden" name="type" value="mentor" />
								<input type="submit" id="mentorSubmitBtn" class="btn btn-l right" value="Submit">
							</div>
						</div>
						
					</form>
				</div>
			</div>
			
		</div>
	</section>
	
	
	
	<!-- Footer -->
	<?php include "includes/footer.php" ?>
	
	
	<!-- Javascript -->
	<?php include "includes/js.php" ?>
	
	
</body>
</html>