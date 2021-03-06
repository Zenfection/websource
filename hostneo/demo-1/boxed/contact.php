<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>HostNeo - Professional Web Hosting Responsive HTML5 Template</title>

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,500,400italic,500italic,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="js/revolutionslider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" type="text/css" href="js/revolutionslider/fonts/font-awesome/css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!--  CSS STYLES  -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- Mega Menu -->
<link href="js/mainmenu/menu.css" rel="stylesheet">

<!-- forms -->
<link rel="stylesheet" href="js/form/css/sky-forms.css" type="text/css" media="all">

</head>
<body>
<div class="site-wrapper">
  <header class="header headr-style-1 font-white">
    <div class="container">
      <div class="row"> 
        <!-- Menu -->
        <div class="navbar yamm navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <a href="index.html" class="navbar-brand logo"></a> </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
              <nav>
                <ul class="nav navbar-nav">
                  <!-- Classic list -->
                  <li class="dropdown"><a href="index.html" class="dropdown-toggle">Home <i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="index.html"><i class="fa fa-angle-right"></i> Home Demo 1</a></li>
                      <li><a href="../demo-2/index.html"><i class="fa fa-angle-right"></i> Home Demo 2</a></li>
                      <li><a href="../demo-3/index.html"><i class="fa fa-angle-right"></i> Home Demo 3</a></li>
                      <li><a href="../demo-4/index.html"><i class="fa fa-angle-right"></i> Home Demo 4</a></li>
                      <li><a href="../onepage/index.html"><i class="fa fa-angle-right"></i> One Page Style 1</a></li>
                      <li><a href="../onepage/index2.html"><i class="fa fa-angle-right"></i> One Page Style 2</a></li>
                      <li><a href="../onepage/index3.html"><i class="fa fa-angle-right"></i> One Page Style 3</a></li>
                      <li><a href="../onepage/index4.html"><i class="fa fa-angle-right"></i> One Page Style 4</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="domain-search.html">Domains  <i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="dropdown-menu">
                      <li><a href="domain-search.html"><i class="fa fa-angle-right"></i> Domain Search</a></li>
                      <li><a href="domain-transfer.html"><i class="fa fa-angle-right"></i> Domain Transfer</a> </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="hosting-services.html">Hosting  <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu" role="menu">
                        <li><a href="webhosting.html"><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                        <li><a href="dedicated-hosting.html"><i class="fa fa-angle-right"></i> Dedicate Hosting</a> </li>
                        <li><a href="shared-hosting.html"><i class="fa fa-angle-right"></i> Shared Hosting</a></li>
                        <li><a href="vps-hosting.html"><i class="fa fa-angle-right"></i> VPS Hosting</a> </li>
                        <li><a href="reseller-hosting.html"><i class="fa fa-angle-right"></i> Reseller Hosting</a> </li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="about.html" class="dropdown-toggle">Pages <i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="about.html"><i class="fa fa-angle-right"></i> About</a></li>
                      <li><a href="services.html"><i class="fa fa-angle-right"></i> Services</a></li>
                      <li><a href="team.html"><i class="fa fa-angle-right"></i> Our Team</a></li>
                      <li><a href="faqs.html"><i class="fa fa-angle-right"></i> FAQ</a></li>
                      <li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
                      <li><a href="registration.html"><i class="fa fa-angle-right"></i> Registration</a></li>
                      <li><a href="left-sidebar.html"><i class="fa fa-angle-right"></i> Left Sidebar</a></li>
                      <li><a href="right-sidebar.html"><i class="fa fa-angle-right"></i> Right Sidebar</a></li>
                      <li class="dropdown-submenu mul"><a href="#" tabindex="-1"><i class="fa fa-angle-right"></i> Multi Level Submenu</a>
                        <ul class="dropdown-menu" style="">
                          <li><a href="#"><i class="fa fa-angle-right"></i> Menu Item 1</a></li>
                          <li><a href="#"><i class="fa fa-angle-right"></i> Menu Item 2</a></li>
                          <li><a href="#"><i class="fa fa-angle-right"></i> Menu Item 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="portfolio-one.html" class="dropdown-toggle">Portfolio <i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                      <li> <a href="portfolio-one.html"><i class="fa fa-angle-right"></i> Single Item</a> </li>
                      <li> <a href="portfolio-two.html"><i class="fa fa-angle-right"></i> Portfolio Columns 2</a> </li>
                      <li> <a href="portfolio-three.html"><i class="fa fa-angle-right"></i> Portfolio Columns 3</a> </li>
                      <li> <a href="portfolio-four.html"><i class="fa fa-angle-right"></i> Portfolio Columns 4</a> </li>
                      <li> <a href="portfolio-five.html"><i class="fa fa-angle-right"></i> Portfolio + Sidebar</a> </li>
                      <li> <a href="portfolio-six.html"><i class="fa fa-angle-right"></i> Portfolio Full Width</a> </li>
                      <li> <a href="portfolio-seven.html"><i class="fa fa-angle-right"></i> Portfolio Masonry</a> </li>
                      <li> <a href="portfolio-eight.html"><i class="fa fa-angle-right"></i> Masonry Projects</a> </li>
                      <li> <a href="portfolio-nine.html"><i class="fa fa-angle-right"></i> Slider Projects</a> </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="blog.html" class="dropdown-toggle">Blog <i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="blog.html"><i class="fa fa-angle-right"></i> Blog Full Width</a> </li>
                      <li><a href="blog2.html"><i class="fa fa-angle-right"></i> Blog 3Columns</a> </li>
                      <li><a href="blog3.html"><i class="fa fa-angle-right"></i> Blog Standard</a> </li>
                      <li><a href="blog-post.html"><i class="fa fa-angle-right"></i> Single Post</a> </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="contact.php" class="dropdown-toggle">Contact</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li class="signup"><a href="registration.html">Sign Up</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end Header -->
  
  <div class="page-header three">
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1">Contact </h2>
        <h4 class="font-white font18">Get in Touch with Us</h4>
      </div>
      <div class="col-md-6">
        <div class="breadcrumbs view-links"><a href="index.html">Home</a> <i>/</i> Contact</div>
      </div>
    </div>
  </div>
  <!-- end features section 1 -->
  
  <div class="section-lg m-top0">
  <div class="embed-container maps">
    <iframe width="425" height="450" class="fullwide-col" src="https://maps.google.co.in/maps?sll=34.0204989,-118.4117325&amp;sspn=0.8745562,1.4073488&amp;cid=16298491244936825076&amp;q=Los+Angeles,+CA,+USA&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Los+Angeles+County,+California,+United+States&amp;t=m&amp;ll=34.052234,-118.243685&amp;spn=0.697085,0.848982&amp;output=embed" style="pointer-events: none;"></iframe>
  </div>
</div>

<div class="section-lg m-top8">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <form action="demo-contacts-process.php" method="post" id="sky-form" class="sky-form">
				<fieldset>					
					<div class="row">
						<section class="col col-6">
							<label class="label">Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name">
							</label>
						</section>
						<section class="col col-6">
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email">
							</label>
						</section>
					</div>
					
					<section>
						<label class="label">Subject</label>
						<label class="input">
							<i class="icon-append fa fa-tag"></i>
							<input type="text" name="subject" id="subject">
						</label>
					</section>
					
					<section>
						<label class="label">Message</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="4" name="message" id="message"></textarea>
						</label>
					</section>
					
					<section>
						<label class="label">Enter characters below:</label>
						<label class="input input-captcha">
							<img src="captcha/image.php?<?php echo time(); ?>" width="100" height="35" alt="Captcha image" />
							<input type="text" maxlength="6" name="captcha" id="captcha">
						</label>
					</section>
					
					<section>
						<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
					</section>
				</fieldset>
				
				<footer>
					<button type="submit" class="button">Send message</button>
				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>
			</form>
      </div>
      <div class="col-md-4">
        <div class="address-info">
          <h2 class="m-bottom2">Address Info</h2>
          <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
          <br>
          <p>Please be patient while waiting for response.<br>
<strong>Phone General Inquiries: +1 (012) 345 6789</strong></p>
          <br>
        </div>
        <!-- end section -->
        
        <div class="address-info">
          <h2 class="m-bottom2">Address Info Two</h2>
          <ul class="address-info map">
            <li><i class="fa fa-map-marker"></i> 15 Barnes Wallis Way, 358744, USA</li>
            <li><i class="fa fa-phone"></i> +1 (012) 345 6789</li>
            <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>
          </ul>
        </div>
        <!-- end section --> 
      </div>
    </div>
  </div>
</div>
  <!-- end features section 2 -->
 
  <footer class="footer-bg m-top8">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 m-bottom4">
          <h4 class="font16 font-thin uppercase m-bottom2 font-white">About Company</h4>
          <div class="title-line color"></div>
          <p class="m-bottom2">Pellentesque mi purus, eleifend sedt commodo, sagittis elts vestibulum dui sagittis mlste sagittis elts.</p>
          <ul class="address-info listitems">
            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp; 15 Barnes Wallis Way, 358744, USA</li>
            <li><i class="fa fa-phone"></i>&nbsp;&nbsp; +1 (012) 345 6789</li>
            <li><i class="fa fa-envelope"></i>&nbsp;&nbsp; info@yourdomain.com</li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-12 m-bottom4">
          <h4 class="font16 font-thin uppercase m-bottom2 font-white">Support</h4>
          <div class="title-line color"></div>
          <ul class="listitems footer-links left-padd0">
            <li><a href="#"><i class="fa fa-angle-right"></i> Product Support</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Report Abuse</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Knowledgebase</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Affiliates and Resellers</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> WHOIS Search</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Scripting &amp; Add-ons</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-12 m-bottom4">
          <h4 class="font16 font-thin uppercase m-bottom2 font-white">Hosting Packages</h4>
          <div class="title-line color"></div>
          <ul class="listitems left-padd0">
            <li><a href="#"><i class="fa fa-angle-right"></i> Web Hosting</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> WordPress Hosting</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> VPS Hosting</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Cloud Server</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Reseller Package</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Dedicated Hosting</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-12 m-bottom4">
          <h4 class="font16 font-thin uppercase m-bottom2 font-white">Resources</h4>
          <div class="title-line color"></div>
          <ul class="listitems left-padd0">
            <li><a href="#"><i class="fa fa-angle-right"></i> Email Services</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> WHOIS Search</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Scripting &amp; Add-ons</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Marketing Services</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Affiliates</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Scripting &amp; Add-ons</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-12 m-bottom4 font-white">
          <h4 class="font16 font-thin uppercase m-bottom2 font-white">Account</h4>
          <div class="title-line color"></div>
          <ul class="listitems left-padd0">
            <li><a href="#"><i class="fa fa-angle-right"></i> My Account</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> My Renewals</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Create Account</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Knowledgebase</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Contact Us</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Sitemap</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyrights m-top3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-top1 m-bottom1"> Copyright &copy; 2016 yourdomian. All rights reserved. </div>
        <div class="col-md-6">
          <ul class="social-icons style-three">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer>
  <!-- end footer --> 
  
</div>
<!-- site wrapper end -->

<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Main Menu -->
<script src="js/mainmenu/customeUI.js"></script> 
<script src="js/mainmenu/jquery.sticky.js"></script>

<!-- Scroll to Fixied Sticky --> 
<script src="js/mainmenu/sticky.js" type="text/javascript"></script> 

<!-- contact form --> 
<script src="js/form/jquery.form.min.js"></script> 
<script src="js/form/jquery.validate.min.js"></script>
<script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
			})(jQuery);		
		</script> 

<!-- Scroll Up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>
</body>
</html>