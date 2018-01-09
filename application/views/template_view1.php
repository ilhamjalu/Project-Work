<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Moklet Canteen</title>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<!---CSS-->
		<link href="<?php echo base_url();?>assets/css/lightbox.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--animation-->
		<link href="<?php echo base_url();?>assets/css/aos.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- font-->
		<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/css/new.css">

	</head>


	<body>
		<div class="header-w3layouts"> 
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Moklet</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.html"><span>Moklet</span> 24</a></h1>
					</div> 

					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="hidden"><a class="page-scroll scroll" href="#page-top"></a>	</li>
							<li><a class="page-scroll scroll" href="#penjual">Home</a></li>
							<li><a class="page-scroll scroll" href="#datapenjual">data</a></li>
							<li><a class="page-scroll scroll" href="#report">report</a></li>
							<li><a class="page-scroll scroll" href="#about">Pengembang</a></li>
							<li><a class="page-scroll scroll" href="<?php echo base_url()?>index.php/login/logout">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>  
		</div>
		<?php
            $this->load->view($main_view);
        ?>
<!-- copyright -->
<div class="copyright">
	<div class="copyrighttop">
		
		<ul>
			<li><h4>Follow us on:</h4></li>
			<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
			<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		</ul>
	</div>
	
	<div class="clearfix"></div>
</div>
<!-- //copyright -->

<!-- bootstrap-modal-pop-up -->
	<!-- <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Food Chef 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/food3.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div> -->
<!-- //bootstrap-modal-pop-up --> 


<script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"> </script><!-- for gallery js -->
 


 <!-- /Responsive slides js -->
						<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>

 <!-- Responsive slides js -->
 
<!-- animation effects-js files-->
	<script src="<?php echo base_url();?>assets/js/aos.js"></script><!-- //animation effects-js-->
	<script src="<?php echo base_url();?>assets/js/aos1.js"></script><!-- //animation effects-js-->
<!-- animation effects-js files-->

<!-- //here starts scrolling icon -->
<script src="<?php echo base_url();?>assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
	<!-- here stars scrolling script -->
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
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- scrolling script -->
<!-- <script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>  -->
<!-- //scrolling script -->

</body>
</html>