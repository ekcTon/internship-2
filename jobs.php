<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<head>
	<title>Unit company limited</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--bulma-->
    <link rel="stylesheet" type="text/css" href="    https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"> <!--bulma-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> <!--fontawesome-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<style>
		@media (min-width: 768px) {
		.img-nav1 {
			width:20%;
		}
	}
		@media (max-width: 768px) {
		.img-nav2 {
			width:70%;
		}
		.footer-none {
			display:none;
		}
        .mobile {
            display:unset !important ; 
        }
	}
</style>

    <script>
        // function myFunction() {
        //     var hour = new Date().getHours();
        //     var greeting;
        //     if (hour < 18) {
        //         greeting = "Good day";
        //     } else {
        //         greeting = "Good evening";
        //     }
        //     document.getElementById("demo").innerHTML = greeting;
        // }

        $(document).ready(function () {

            $("#submit").click(function () {
                console.log({
                    "Name": $("#name").val(), "Lastname": $("#lastname").val(), "Birthday": $("#birthday").val(),
                    "Gander": $("#gander").val(), "Nationality": $("#nationality").val(), "Ethnicity": $("#ethnicity").val(), 
                    "Religion": $("#religion").val(), "ID Card": $("#IDcrad").val(), "E-mail": $("#email").val(),
                    "Work experience": $("#workexperience").val(),"Address": $("#address").val(), "Degree": $("#degree").val(),
                    "Department": $("#department").val(), "Faculty": $("#faculty").val(), "University": $("#university").val(),
                    "GraduationDate": $("#graduationDate").val(), "GPA": $("#GPA").val()
                });
            });
        });

    </script>
    <script>
        function clickGender(gender){
            if(gender == 'male'){
                $('#male').attr('checked','checked')
                $('#female').removeAttr('checked')
                console.log($('#male').val())
            }else if(gender == 'female'){
                $('#male').removeAttr('checked')
                $('#female').attr('checked','checked')
                console.log($('#female').val())
            }
        }
        
    </script>
</head>

<body>
	<div class="top_header" id="home">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<div class="logo-w3layouts-agileits" style="display:flex;flex-direction:row;width:100%">
						<div style="display:flex;flex-direction:row;justify-content:center;width:50%"> 
							<a class="" href="index.php" style="display: flex;flex-direction:column;justify-content:center"><img class="img-nav1 img-nav2" src="images/Unitlogo.png"></a>
						</div>

						<div style="display:flex;flex-direction:row;justify-content:flex-end;align-items:center;width:50%"> 
								<div id="navbar" class="navbar-collapse collapse">
									<div class="nav_right_top">
										<ul class="nav navbar-nav">
											<li><a href="index.php">Home</a></li>
											<li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li class="active"><a href="jobs.php">Jobs</a></li>
											<li class="dropdown">
										</ul>
									</div>
								</div>	
						</div>
						<div>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
			
				</div>
			</div>
		</nav>
	</div>
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>Jobs</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
<form action="Sent_mail.php" method="post" target="_blank">
		<div class="container">
			
			<div class="row"><h3 class="tittle-w3ls we">Join Us</h3>
            <div class="container">
				<img src="images/hiring.png" alt="">
                 <div class="field">
                    <p class="label" style="color:black;font-size:25px">Personal information</p>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Name</p>
                            <input class="input" type="text" style="max-width:none" id="name" name="name">
                        </div>
                        <div class="col-md-5 control">
                            <p>Lastname</p>
                            <input class="input" type="text" style="max-width:none" id="lastname" name="lastname">
                        </div>
                    </div>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Birth day</p>
                            <input class="input" type="text" style="max-width:none" id="birthday" name="birthday">
						</div>
						
                        <div class="col-md-2 control">
                            <p>Gander</p>
                            <div class="col-md-12 control" style="display:flex;flex-direction:row;width:100%">
                                <div>
                                    <label class="col-md-5 radio">
                                        <input onclick="clickGender('male')" type="radio" id="male" value="male" name="male"/>&nbsp;male<br />
                                    </label>
                                </div>
                                <div>
                                    <label class="col-md-5 radio">
                                        <input onclick="clickGender('female')" type="radio" id="female" value="female" name="female"/>&nbsp;famale<br />
                                    </label>
                                </div>
                            </div>
						</div>
					</div>
					
					

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Nationality</p>
                            <input class="input" type="text" style="max-width:none" id="nationality" name="nationality">
                        </div>
                        <div class="col-md-5 control">
                            <p>Ethnicity</p>
                            <input class="input" type="text" style="max-width:none" id="ethnicity" name="ethnicity">
                        </div>
                    </div>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Religion</p>
                            <input class="input" type="text" style="max-width:none" id="religion" name="religion">
                        </div>
                        <div class="col-md-5 control">
                            <p>ID Card</p>
                            <input class="input" type="text" style="max-width:none" id="IDcard" name="IDcard">
                        </div>
                    </div>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>E-mail</p>
                            <input class="input" type="text" style="max-width:none" id="email" name="email">
                        </div>
						<div class="col-md-3 control">
                    	    <p>Phone number</p>
                        	<input class="input" type="text" style="max-width:none" id="birthday" name="birthday">
						</div>
						<div class="col-md-2 control">
                            <p>Posttion</p>
                            <div class="select">
                                <select onchange="console.log($('#position_dropdown').val())" id="position_dropdown" name="position_dropdown">
                                    <option>Developer</option>
                                    <option>Designer</option>
                                    <option>Accountant</option>
                                    <option>Marketing</option>
                                </select>
                            </div>
						</div>
                    </div>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-10 control">
                            <p>Work experience</p>
                            <textarea class="textarea" placeholder="Textarea" id="workexperience" name="workexperience"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-10 control">
                            <p>Address</p>
                            <textarea class="textarea" placeholder="Textarea" id="address" name="address"></textarea>
                        </div>
                    </div>

                 </div>


                 <div class="field">
                    <p class="label" style="color:black;font-size:25px">History of education</p>
    
                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Degree</p>
                            <input class="input" type="text" style="max-width:none" id="degree" name="degree">
                        </div>
                        <div class="col-md-5 control">
                            <p>Department</p>
                            <input class="input" type="text" style="max-width:none" id="department" name="department">
                        </div>
                    </div>
    
                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Faculty</p>
                            <input class="input" type="text" style="max-width:none" id="faculty" name="faculty">
                        </div>
                        <div class="col-md-5 control">
                            <p>University</p>
                            <input class="input" type="text" style="max-width:none" id="university" name="university">
                        </div>
                    </div>
    
                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                        <div class="col-md-5 control">
                            <p>Graduation date</p>
                            <input class="input" type="text" style="max-width:none" id="graduationDate" name="graduationDate">
                        </div>
                        <div class="col-md-5 control">
                            <p>GPA</p>
                            <input class="input" type="text" style="max-width:none" id="GPA" name="GPA">
                        </div>
                    </div>

                    <div class="col-md-12 mobile" style="display:flex;flex-direction:row;width:100%">
                          <div class="col-md-3 control" style="margin-top:10px">
                            <button class="button is-link" id="submit" type="submit" value="Submit">Submit</button>
                          </div>
                    </div>
                </div>

                </div>
                  
            </div>
		</div>
		</form>
	</div>

<!-- footer -->
<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left footer-none">
				<h2><a href="index.php"><img src="images/Unitlogo.png" style="width: 40%"></a></h2>
				<p>We are the leader of Blockchain technology and E-sport in Thailand
						many application about cryptocurrency and E-Sport was published by us.
						We have a lot of related works about innovation technology for Government such as 
						Ministry of Justice, Ministry of Tourism and Sports and etc.
						By the way we are the leader of driving E-sports in South of Thailand</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/unitwebdesign/" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
					<div class="sign-grds">
					<div class="col-md-1"></div>
						<div class="col-md-6 sign-gd-two footer-none">
								<h4>Certification</h4>
							<ul>
								<li><p>Oracle Certification Professional JAVA SE7</p></li>
								<li><p>IBM Certification Devveloper Cognos TM1 10.1</p></li>
								<li><p>IBM Certification Designer Cognos 10BI Report</p></li>
								<li><p>IBM Certification Academic Associate DB2 9 Database and Application Fundamantals</p></li>
								<li><p>IBM Certification Solotion Designer Rational Sohtware Architect</p></li>
								<li><p>IBM Certification Specialist Rational Team Concert V3</p></li>
								<li><p>IBM Certification Solotion Designer Rational Sohtware Architect</p></li>
								<li><p>IBM Certification Solotion Designer Rational Performance Teater V8</p></li>
								<li><p>IBM Certification System Administrator WebSphere Application Server Network</p></li>
							</ul>
						</div>
						<div class="col-md-5 sign-gd-two">
							<h4>Contact <span>Information</span></h4>
							<div class="address">
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Phone Number</h6>
										<p>02 117 3418-9</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Email Address</h6>
										<p>Email :<a href="https://www.google.com/intl/th/gmail/about/#"> unitsupport@unit.co.th</a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="address-grid">
									<div class="address-left">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="address-right">
										<h6>Location</h6>
										<p>699 Modernform Tower floor. 15 room No.1507,1509 Srinakarin Rd. Patthanakan Suanluang 10250 Bangkok Thailand
	
										</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
	
						<div class="clearfix"></div>
					</div>
				</div>
			<div class="clearfix"></div>
			<p class="copy-right">&copy 2017 Unit Co.,Ltd | Design by W3layouts</p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>





</html>

