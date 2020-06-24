<?php require(__DIR__.'/views/partials/header.php'); ?>
<body>
<?php require(__DIR__.'/views/partials/navbar.php'); ?>

	<!--================Home Banner Area =================-->
	<section class="landingBanner fullscreen" id="home">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-12 tagLine">
					<h1>Javier González</h1>
					<h3 class="animated slideInLeft">Software Developer</h3>
					<h3 class="animated slideInLeft delay-1s">Designer</h3>
					<span class="animated slideInLeft delay-2s"> <h3>Amateur </h3> 
						<ul class="animatedTitles">
							<li><h3 id="toFill" class="active"></h3> </li>
						</ul>
					</span>
					<div class="ctaHire">
						<a href="#contact_area" class="btn circle">Let's Work Together</a>
					</div>
					<a id="portfolio_area"></a>
				</div>
			</div>
		</div>
	</section>

	<!--================End Home Banner Area =================-->
	
	<section class="small_gap portfolio_title" id="work">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 underline">
					<div class="main-title">
						<h1>Portfolio</h1>
						<h3>( I Sometimes Make Things )</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ Start Portfolio Area =================-->
	<section class="portfolio_area" id="work">

		<!------------------------------------Project1-------------------------------------------->
		<div id="MemoryCaptures" class="portfolio_project">
			<div class="container">
				<div class="row justify-content-center">
					<div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" class="col-sm-12 col-md-4">
						<div class="row">
							<img class="portfolio_image MemC_mockup" src="/img/works/work1.1.gif" alt="">
						</div>
						<div class="row">
							<img class="portfolio_image_small" src="/img/works/work1.2.png" alt="">
							<img class="portfolio_image_small" src="/img/works/work1.3.png" alt="">							
						</div>
					</div>

 					<div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="500" class="projects_text row col-sm-12 col-md-6 align-items-center">
						<div class="col-sm-12">
							<h3>Memory Captures Full Stack Application</h3>
							<p>Vue.js | Laravel</p>
							<p>Personal Business</p>
							<P>
								All content from design, to architecture, to implementation done by me. A full stack application for delivering media assets to customers that have bought a physical copy already, and is used in production.<br>
								Navigate to <a href="https://memorycaptures.com/claim" target="blank"> https://memorycaptures.com/claim </a> and write the access code: sold or access code: notsold to see the respective behavior of each.
							</P>
							<div class="project_icons">
								<a class="portfolioIcon" href="https://memorycaptures.com"><img class="iconImage" src="/img/elements/see_info.svg" alt="See Project"><span class="iconImage-text">See Project</span></a>
								<a class="portfolioIcon" href="http://github.com/javier123454321/memorycaptures_frontend" target="_blank"><img class="iconImage" src="/img/elements/github.png" alt="See Code"> <span class="iconImage-text">See Code</span></a>
							</div>
						</div>
					</div>	
				</div>	
			</div>
		</div>
			
		<!------------------------------------Project2-------------------------------------------->
		<div id="Cama" class="portfolio_project">
			<div class="container">
				<div class="row justify-content-center">
					<div data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="500" class="projects_text row col-sm-12 col-md-6 align-items-center">
						<div class="col-sm-12">
							<h3>Bed [CAMA]</h3>
							<p>Sketchup | PowerTools</p>
							<p>Personal Design & Build Project</p>
							<P>
								Designed and built a bed for myself using sketchup and powertools. 
								<div class="quote">“It is the pervading law of all things organic and inorganic, of all things physical and metaphysical, of all things human and all things superhuman, of all true manifestations of the head, of the heart, of the soul, that the life is recognizable in its expression, that form ever follows function. This is the law.”
								-Louis Sullivan</div>
								In the digital world where abstractions are built on top of abstractions, I like to keep in touch with the physical and not get lost in the screen.
							</P>
						</div>
					</div>	

					<div  data-aos="fade-right" data-aos-offset="200" data-aos-duration="1000" class="col-sm-12 col-md-4 ">
						<div class="row">
							<img class="lozad portfolio_image main" src="/img/works/work2.1.gif" alt="">
						</div>
						<div class="row">
							<img class="lozad portfolio_image_small" src="/img/works/work2.2.jpg" alt="">
							<img class="lozad portfolio_image_small" src="/img/works/work2.3.jpg" alt="">						
						</div>
					</div>
				</div>	
			</div>
		</div>	

		<!------------------------------------Project3-------------------------------------------->
		<div id="MemoryCaptures" class="portfolio_project">
			<div class="container">
				<div class="row justify-content-center">
					<div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" class="col-sm-12 col-md-4">
						<div class="row">
							<img class="lozad portfolio_image MemC_mockup" src="/img/works/work3.1.png" alt="">
						</div>
						<div class="row">
							<img class="lozad portfolio_image_small" src="/img/works/work3.2.jpg" alt="">
							<img class="lozad portfolio_image_small" src="/img/works/work3.3.jpg" alt="">							
						</div>
					</div>

						<div data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="500" class="projects_text row col-sm-12 col-md-6 align-items-center">
						<div class="col-sm-12">
							<h3>Urban Build House</h3>
							<p>Revit | Rhino 3d | Grasshopper</p>
							<p>Built Project</p>
							<p>
								Designed and built a house with a group of students at Tulane University
							</p>
							<div class="project_icons">

							</div>
							<a id="about_area"></a>
						</div>
					</div>	
				</div>	
			</div>
		</div>
	</section>
	<!--================ End Portfolio Area =================-->

	<!--================ Start About Area =================-->
	<section class="about-area section_gap gray-bg">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col about-left">
					<img class="lozad img-fluid" src="/img/about/about-img.jpg" alt="">
				</div>
				<div class="col-lg-6 col-md-12 about-right">
					<div class="main-title text-left">
						<h1>About Me.</h1>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p>
							I am a designer, coder, and all-around curious person of a diverse heritage. Professionally exploring 
							entrepreneurship, information technology, design and the intersection of the built environment, our 
							networked culture, and society. Doing my best to take advantage of the statistical impossibility that 
							is being alive. 
						</p>
					</div>
				</div>
			</div>

			<div class="resume container section_gap">
				<div class="section_title">
					<h2>Work History</h2>
				</div>
				<div class="resume-item">
					<h5>Memory Captures | Administrative Director</h5>
					<p>July 2019 - Present,  Chicago, IL</p>
					<div class="description">
						<p>Designed, implemented, and deployed a custom full-stack application using Vue.js, and Laravel (PHP). <br>
							Took an idea to a finished product, integrating third party APIs to a custom built media asset management and
							delivery dashboard with custom Auth and CRUD functionality.<br>
							Fostering relationships with partners in the restaurant/hospitality industry, negotiating, following up, and closing
							the deal on business partnerships which led to thousands of dollars in monthly revenue.					
						</p>
					</div>
				</div>

				<div class="resume-item">
					<h5>Celltrak | Software Automation Engineer</h5>
					<p>August 2019 - Present,  Chicago, IL</p>
					<div class="description">
						<p>Reduced regression testing time by 20% by implementing an automation testing framework with Java and Selenium.<br>
 							Improving development and testing productivity by creating and maintaining reusable and modular JavaScript functions that mock client API requests.
						</p>
					</div>
				</div>

				<div class="resume-item">
					<h5>SOLISCOLOMER Arquitectos | Architectural Designer For Social Impact Projects</h5>
					<p>July 2017 - April 2018,  Guatemala City</p>
					<div class="description">
						<p>Secured several contracts for SolisColomer through designing and presenting master plans, residential, and commercial spaces for organizations and individuals in Guatemala.<br>
							Introduced modern design processes and computational methods to increase building and design efficiency.
						</p>
					</div>
				</div>

				<div class="resume-item">
					<h5>Taylor Center for Social Innovation | Design Thinking Fellow</h5>
					<p>August 2016 - May 2017,  New Orleans, LA</p> 
					<div class="description">
						<p>Helping with the creation and implementation of  design thinking "workshops" to teach a multidisciplinary audience about human centered design mindsets for social innovation. 
							Remade graphic material - flyers, etc- to help promote the programs hosted by Taylor.						
							Worked with other teams to create marketing material and content to promote design thinking related programming at Taylor.
							Helped in the planning and programming of an immersive weekend experience focused around helping a community partner - PlayBuild - in their initiative to bring play materials to the neutral ground in Central City. 						
						</p>
					</div>
				</div>

				<div class="resume-item">
					<h5>Small City Center | Public Interest Design Fellow</h5>
					<p>May 2016 - June 2017,  New Orleans, LA</p>
					<div class="description">
						<p>
						Working with a group of student fellows to conduct research about topics of interest in the built environment. 
						Used a combination of quantitative and qualitative research and analysis in order to produce a report which describes and makes graphic the landscape of mental and behavioral health resources available to schoolchildren in New Orleans. The research was a combination of Geographic Information System mapping and a process of interviews from people experiencing different levels of involvement to not only describe what exists, but incorporate how perceptions and values also affected access to and the effectiveness of the process.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Area =================-->

	

	<!--================ Start Footer Area =================-->
	
	<a id="contact_area"></a>
	<?php
	require (__DIR__."/views/partials/footer.php");
	?>