<?php

/* @var $this yii\web\View */

$this->title = 'Hotel Dapa';
?>

<!--/banner-section-->
	<div id="demo-1" class="banner-inner">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile">	
								<nav class="navbar navbar-default">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									    <h1><a  href="index.php?r=site%2Findex2"><span>H</span>otel <p class="s-log">Espejo</p></a>
										 
										</h1>
									</div>
									<!-- navbar-header -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										
										<ul class="nav navbar-nav">
											<li class="active"><a href="index.php?r=site%2Findex2">Inicio</a></li>
											<li class="dropdown">
												<a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-hover="Pages" data-toggle="dropdown" aria-expanded="false">Habitaciones <b class="caret"></b></a>
												 <ul class="dropdown-menu">
													<li>
														<a href="index.php?r=site%2Fhabitacion1">Habitación 1</a>
													</li>
												</ul>
											</li>
											<li><a href="#">Galeria</a></li>
											<li><a href="#">Contacto</a></li>
										</ul>

									</div>
									<div class="clearfix"> </div>	
								</nav>
									<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Search...">
														</form>
													</div>
												</div>
					
							</div> 

			
		<!--//header-w3l-->
		</div>
		 </div>
  <!--/banner-section-->
 <!--//main-header-->
    <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php?r=site%2Findex2">Inicio</a> <i> /</i></li>
				<li>Habitación 1</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->





<script type="text/javascript" src="../web/pagina/js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						}
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="../web/pagina/js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="../web/pagina/js/main.js"></script>

<!--/script-->
	<script src="../web/pagina/js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<!-- flexSlider -->
					<script defer src="../web/pagina/js/jquery.flexslider.js"></script>
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
<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="../web/pagina/css/jquery-ui.css" />
				<script src="../web/pagina/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="../web/pagina/js/move-top.js"></script>
<script type="text/javascript" src="../web/pagina/js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
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
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="../web/pagina/js/bootstrap.js"></script>
<!-- //for bootstrap working -->