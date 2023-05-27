<!DOCTYPE html>
<html lang="en">
<head>
<title>Farmer | grains</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

</head>
<style type="text/css">


img
{
 width:auto;
 box-shadow:0px 0px 20px #cecece;
 -moz-transform: scale(0.7);
 -moz-transition-duration: 0.6s; 
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.7);
 
 -ms-transform: scale(0.7);
 -ms-transition-duration: 0.6s; 
 -ms-height: 30px;
 -ms-width: 30px;
}
img:hover
{
  box-shadow: 20px 20px 20px #dcdcdc;
 -moz-transform: scale(0.8);
 -moz-transition-duration: 0.6s;
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.8);
 
 -ms-transform: scale(0.8);
 -ms-transition-duration: 0.6s;
 
}
</style>
<body>
<!-- banner -->
<div class="banner1">
	<div class="container">
		<div class="w3_agileits_banner_main_grid">
			<div class="w3_agile_logo">
				<h1><a href="home.php"><span>F</span>armer Forum With System Localization<i>Grow healthy products</i></a></h1>
			</div>
			<div class="agile_social_icons_banner">
				<ul class="agileits_social_list">
					<li><div id="google_translate_element"></div>
                    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
				</ul>
			</div>
			<div class="agileits_w3layouts_menu">
				<div class="shy-menu">
					<a class="shy-menu-hamburger">
						<span class="layer top"></span>
						<span class="layer mid"></span>
						<span class="layer btm"></span>
					</a>
					<div class="shy-menu-panel">
						<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
							<ul class="w3layouts_menu__list">
								<li class="active"><a href="home.php">Home</a></li>
								<li><a href="about.php">About Us</a></li> 
								<li><a href="services.php">Services</a></li>
								<li><a href="items.php">Items & Rates</a></li> 
								<li><a href="strategy.php">Rate strategy</a></li>
								<li><a href="index.php">Logout</a></li>
							</ul>
						</nav>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- banner -->
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Agriculture
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<section>
				<div class="modal-body">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
					<p>This application helps the farmer to know their current weather. Farmers can forecast the weather for next upcoming days so that they can plan according to that. This application advises the crops for farmers according to the seasons. It also displays the crops that are not suitable to that season. Farmers can be aware of all the crop diseases and their precautions with the help of this application. All these features can be done with the help of Admin . Initially all these information will be in All languages format.</i></p>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- //bootstrap-pop-up -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="w3layouts_breadcrumbs_left">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php">Home</a><span>/</span></li>
				<li><i class="fa fa-cogs" aria-hidden="true"></i>Grains</li>
			</ul>
		</div>
		<div class="w3layouts_breadcrumbs_right">
			<h2>Grains</h2>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- services -->
<div class="welcome">
	<div class="container">
		<h3 class="agileits_w3layouts_head">Current <span> Grains </span> Cost</h3>
		<div class="w3_agile_image">
			<img src="images/1.png" alt=" " class="img-responsive" />
		</div>
		<p class="agile_para">Current Grains Cost are</p>
		<div class="w3_agile_services_grids"> 
			<div class="col-md-12 w3_agile_services_grid"> 
				<div class="col-xs-12 w3_agile_services_grid_left"> 
					 <div class="row">
					<?php
								include('db.php');
								$query = mysql_query("SELECT * FROM grains_details") or die(mysql_error());
								while ($row = mysql_fetch_array($query)) {
								$cost = $row['marketcost_grains'];
								$name = $row['name_grains'];	
								$imag = $row['image'];
								$pra= $imag."";
								?>
                                  <div class="col-xs-6 col-sm-6">
								<td><img src="<?php echo $pra; ?>"   class="img-responsive"  /></td>


								<input type="text" name="name" value="<?php echo $row['image'] ?>" style="visibility:hidden; height:1px;" />

										<td> <div class="agileits_w3layouts_events_text port_info_agile">
											<h3><?php echo $name; ?></h3>
											<h4><?php echo $cost; ?> : 1 KG</h4>
										</div>
									</td>
								</div>
				            <?php } ?>
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			
			
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
  </script>
<!-- //flexSlider -->
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="w3agile_footer_grids">
			<div class="col-md-3 agileinfo_footer_grid">
				<div class="agileits_w3layouts_footer_logo">
					<h2><a href="home.php"><span>A</span>gri Culture<i>Grow healthy products</i></a></h2>
				</div>
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<h3>Contact Info</h3>
				<h4>Call Us <span>+91 9876543210</span></h4>
				<br>
				<ul class="agileits_social_list">
					<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
				<h3>Navigation</h3>
				<ul class="w3layouts_footer_nav">
					<li><a href="home.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
					<li><a href="about.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>About Us</a></li>
					<li><a href="contact.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 agileinfo_footer_grid">
				<h3>Blog Posts</h3>
				<div class="agileinfo_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
				</div>
				<div class="agileinfo_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
				</div>
				<div class="agileinfo_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
				</div>
				<div class="agileinfo_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		<div class="w3_agileits_footer_copy">
			<div class="container">
				<p>© 2019 Agriculture. All rights Reserved.</p>
			</div>
		</div>
</div>
<!-- //footer -->
<!-- menu -->
	<script>
		$(function() {
			
			initDropDowns($("div.shy-menu"));

		});

		function initDropDowns(allMenus) {

			allMenus.children(".shy-menu-hamburger").on("click", function() {
				
				var thisTrigger = jQuery(this),
					thisMenu = thisTrigger.parent(),
					thisPanel = thisTrigger.next();

				if (thisMenu.hasClass("is-open")) {

					thisMenu.removeClass("is-open");

				} else {			
					
					allMenus.removeClass("is-open");	
					thisMenu.addClass("is-open");
					thisPanel.on("click", function(e) {
						e.stopPropagation();
					});
				}
				
				return false;
			});
		}
	</script>
<!-- //menu -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aaa38b9d7591465c708959d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>