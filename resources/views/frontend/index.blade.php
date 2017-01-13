<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>My Resume a Personal Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files-->
<link href="{{asset('frontend_theme/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
<link href="{{asset('frontend_theme/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="{{asset('frontend_theme/css/swipebox.css')}}">
<!--//Custom Theme files-->
<!--js-->
<script src="{{asset('frontend_theme/js/jquery-1.11.1.min.js')}}"></script> 
<!-- //js -->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/cssst'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="{{asset('frontend_theme/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend_theme/js/easing.js')}}"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<div id="home" class="banner">
		<div class="banner-info">
			<div class="container">
				@foreach($personalInfos as $personalInfo)
				<div class="col-md-4 header-left">
					<img src="{{URL::asset('upload/'.$personalInfo['images'])}}" height="150px" width="150px" alt=""/>
				</div>
				
				<div class="col-md-8 header-right">
					<h2>Hello</h2>
					<h1>I'm {{$personalInfo['name']}}</h1>
					<h6>Web Designer and Developer</h6>
					<ul class="address">
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>{{$personalInfo['dob']}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>PHONE </b></li>
								<li>+977{{$personalInfo['phone_no']}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS </b></li>
								<li>{{$personalInfo['address']}}</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li><a href="mailto:example@mail.com"> {{$personalInfo['email']}}</a></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>WEBSITE </b></li>
								<li><a href="http://w3layouts.com">{{$personalInfo['website']}}</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div class="clearfix"> </div>
				@endforeach
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--top-nav-->
	<div class="top-nav wow">
		<div class="container">
			<div class="navbar-header logo">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					Menu
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="menu">
					<ul class="nav navbar">
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#work" class="scroll">Experience</a></li>
						<li><a href="#education" class="scroll">Education</a></li>
						<li><a href="#skills" class="scroll">Skills</a></li>
						<li><a href="#projects" class="scroll">My Projects</a></li>
						<li><a href="#contact" class="scroll">Contact</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>	
	<!--//top-nav-->
	<!--about-->
	<div id="about" class="about">
		<div class="container">
		
			<h3 class="title"> About Me</h3>
			<div class="col-md-8 about-left">
				<p>{{$about['description']}}</p>
		
			</div>
			
			<div class="col-md-4 about-right">

				<ul>
					<h5>Awards</h5>
					@foreach($awards as $award)
					<li><span class="glyphicon glyphicon-menu-right"></span> {{$award['award']}}</li>
					@endforeach		
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//about-->
	<!--work-experience-->
	<div id="work" class="work">
		<div class="container">
			<h3 class="title">Work Experience</h3>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>2014 - 2016 </h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-right work-right2"> 
					<h4>2013 - 2014 </h4>
				</div>
				<div class="col-md-6 work-left work-left2"> 
					<h5> Company Name <span class="glyphicon glyphicon-briefcase"> </span></h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>2012 - 2013 </h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-right work-right2"> 
					<h4>2010 - 2012 </h4>
				</div>
				<div class="col-md-6 work-left work-left2"> 
					<h5> Company Name <span class="glyphicon glyphicon-briefcase"></span> </h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//work-experience-->
	<!--education-->
	<div id="education" class="education">
		<div class="container">
			<h3 class="title">Education</h3>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>Master Degree - 2010</h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-education"> </span> University Name</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-right work-right2"> 
					<h4>Diploma in Design - 2010</h4>
				</div>
				<div class="col-md-6 work-left work-left2"> 
					<h5> University Name <span class="glyphicon glyphicon-education"></span></h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>Web Design - 2008</h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-education"> </span> University Name</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//education-->
	<!--skills-->
	<div id="skills" class="skills">
		<div class="container">
			<h3 class="title">Skills</h3>
			<div class="skills-info">
				<div class="col-md-6 bar-grids">
					<h6>WEB DESIGN  <span> 80% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 80%">
						</div>
					</div>
					<h6>UI DESIGN & DEVELOPER <span> 70% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 70%">
						</div>
					</div>
					<h6>HTML/CSS<span>90% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 90%">
						</div>
					</div>
					<h6>PHOTOSHOP <span> 75% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 75%">
						</div>
					</div>
				</div>
				<div class="col-md-6 bar-grids">
					<h6>PROJECT MANAGEMENT <span> 85% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 85%">
						</div>
					</div>
					<h6>SOCIAL MEDIA MARKETING<span> 95% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 95%">
						</div>
					</div>
					<h6>UX DEVELOPER<span>80% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 80%">
						</div>
					</div>
					<h6>PHP DESIGN<span> 60% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 60%">
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//education-->
	<!--portfolio-->
	<div id="projects" class="portfolio">
		<div class="container">
			<h3 class="title wow zoomInLeft animated" data-wow-delay=".5s">My Projects</h3>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
						<li class="resp-tab-item"><span>All</span></li>
						<li class="resp-tab-item"><span>Html</span></li>
						<li class="resp-tab-item"><span> Photoshop</span></li>
						<li class="resp-tab-item"><span>Wordpress</span></li>					
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g1.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g1.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid effect-sarah">
										<a href="{{asset('frontend_theme/images/g2.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g2.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g3.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g3.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g4.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g4.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g5.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g5.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g6.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g6.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g7.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g7.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g8.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g8.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g9.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g9.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g5.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g5.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g6.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g6.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g7.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g7.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g3.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g3.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g1.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g1.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g9.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g9.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g2.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g2.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g4.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="{{asset('frontend_theme/images/g8.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="{{asset('frontend_theme/images/g8.jpg')}}" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--ResponsiveTabs-->
			<script src="{{asset('frontend_theme/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
			<!--//ResponsiveTabs-->
			<!-- swipe box js -->
			<script src="{{asset('frontend_theme/js/jquery.swipebox.min.js')}}"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
			<!-- //swipe box js -->
		</div>
	</div>
	<!--//portfolio-->
	<!--contact -->
	<div class="welcome contact" id="contact">
		<div class="container">
			<h3 class="title">Contact Us</h3>
			<div class="contact-row">
				<div class="col-md-6 contact-left">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d250261.21285550427!2d-60.42919264432581!3d46.13039392716506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b67ef033cc4082f%3A0xbf0517bb7d9ecd34!2sNorth+Sydney%2C+NS%2C+Canada!5e0!3m2!1sen!2sin!4v1460613320469"></iframe>
				</div>
				<div class="col-md-6 contact-right">
					<div class="address-left">
						<p>756 global Place, North Sydney,<br> FA-2305,Canada </p>
					</div>
					<div class="address-right">
						<p>Call us :  +00 111 222 3333</p>
						<p>E-mail : <a href="mailto:info@example.com">mail@example.com</a></p>
					</div>
					<div class="clearfix"></div>
					<div class="contact-form">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name" required="">
							<input class="email" name="Email" type="text" placeholder="Email" required="">
							<input class="phone" name="phone" type="text" placeholder="Phone" required="">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<input type="submit" value="SUBMIT" >
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//contact -->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<p>© 2016 My Resume. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('frontend_theme/js/bootstrap.js')}}"></script>
</body>
</html>