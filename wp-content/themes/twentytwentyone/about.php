<?php
/*
Template Name: about us
*/

get_header('theme'); 


while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
<div class="entry-content-page">
    <?php the_content(); ?> <!-- Page Content -->
</div><!-- .entry-content-page -->
<?php

endwhile;
?>

<div class="col-xs-12 hidden-xs">
			<nav>
	<div class="row topics-wrapper">
					<h2 class="sr-only">Quick Help Navigation</h2>
			<div class="col-xs-12 hidden-xs text-center click-guides">
				<p class="text-uppercase">Click our guides below for help</p>
			</div>
			<!--col-->

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">

				<div class="row visible-xs">
					<div class="col-xs-12 text-center quick-help">
						<p class="text-uppercase"><a class="topics-show" href="#topicsNav">Quick Help Topics&nbsp;&nbsp;<span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a></p>
					</div>
					<!--col-->
				</div>
				<!--/.row-->

				<div id="topicsNav" class="row hidden-xs topic-icons">

                     <div class="col-2">
                    </div>

					<div class="col-2">
						<a href="<?php echo get_bloginfo('url');?>/educational-topics/select-new-system/"><img class="img-responsive" src="<?php echo get_bloginfo('url');?>/images/topic-new-system.png" width="129" height="89" alt="Select a New System"></a>
					</div>
					<div class="col-2">
						<a href="<?php echo get_bloginfo('url');?>/educational-topics/repair-replace/"><img class="img-responsive" src="<?php echo get_bloginfo('url');?>/images/topic-repair-or-replace.png" width="129" height="89" alt="Repair or Replace?"></a>
					</div>
					<div class="col-2">
						<a href="<?php echo get_bloginfo('url');?>/educational-topics/energy-bill-concerns/"><img class="img-responsive" src="<?php echo get_bloginfo('url');?>/images/topic-energy-concerns.png" width="129" height="89" alt="Energy Bill Concerns"></a>
					</div>
					<div class="col-2">
						<a href="<?php echo get_bloginfo('url');?>/educational-topics/healthier-home/"><img class="img-responsive" src="<?php echo get_bloginfo('url');?>/images/topic-healthy-home.png" width="129" height="89" alt="Healthier Home"></a>
					</div>
					<div class="col-2">
						<a href="<?php echo get_bloginfo('url');?>/educational-topics/ready-maintenance/"><img class="img-responsive" src="<?php echo get_bloginfo('url');?>/images/topic-ready-for-maintenance.png" width="135" height="89" alt="Ready for Maintenance"></a>
					</div>

				</div>
				<!--/.row for topic images -->
			</div>
			<!--/ .col -->


			<div id="block-topic-buttons" class="hidden-xs col-sm-12 col-lg-3">
				<div class="row topic-buttons">
					<!-- <div class="col-sm-6 col-md-4 col-lg-12 ">
						<a class="btn btn-default btn-sm btn-block contact-show" role="button" href="#">Contact&nbsp;Us&nbsp;Now&nbsp;&nbsp;<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
					</div> -->
					<div class="col-sm-6 col-md-6 col-lg-12">
						<a class="btn btn-default btn-sm btn-block" role="button" href="https://clienthub.getjobber.com/client_hubs/17433109-1f74-4f22-91a5-a15f4f41ee96/login/new" target="_blank">Contact Us - Existing Customer Service Request&nbsp;<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-12">
						<a class=" btn btn-default btn-sm btn-block" role="button" href="<?php echo get_bloginfo('url');?>/educational-topics/request-service/">Contact Us - New Customer Service Request&nbsp;<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					</div>
				</div>
			</div>
		
	</div>
	<!--/.row-->
</nav>
<section>
    <div class="row" id="page-main-content">
        <div class="col-xs-12">
        	<div class="row">
        		<div class="col-xs-12">
        			<h1>About Us</h1>        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3 col-lg-2 hidden-xs">
        			        		</div>
        		<div class="col-sm-9 col-lg-10">
        			<div class="visible-xs-block featured-image-wrapper">
        				        			</div>
        			<p>Air Flow Pros Heating &amp; Air Conditioning is San Francisco's expert&nbsp;heating and cooling company. We offer furnace and air conditioning services in and around San Francisco. Please, feel free to contact us for&nbsp;more information on our services, products, and company.</p>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-xs-12">
        			<div class="grid-menu"><div class="visible-lg-block"><div class="row"><div class="col-3"><div class="center-block grid-menu-item"><a href="https://greenearthheatingandair.com/contact-us/"><span class="img-wrap"><img src="https://storage.googleapis.com/sos-websvc/images/default/contact-us.jpg" alt="Contact Us"></span>Contact Us</a></div></div><div class="col-3"><div class="center-block grid-menu-item"><a href="https://greenearthheatingandair.com/service-area/"><span class="img-wrap"><img src="https://storage.googleapis.com/sos-websvc/images/default/service-areas.jpg" alt="Service Area"></span>Service Area</a></div></div><div class="col-3"><div class="center-block grid-menu-item"><a href="https://greenearthheatingandair.com/history/"><span class="img-wrap"><img src="https://storage.googleapis.com/sos-websvc/images/default/history3.jpg" alt="History"></span>History</a></div></div><div class="col-3"><div class="center-block grid-menu-item"><a href="https://greenearthheatingandair.com/qualifications/"><span class="img-wrap"><img src="https://storage.googleapis.com/sos-websvc/images/default/qualification.jpg" alt="Qualifications"></span>Qualifications</a></div></div></div><div class="row"><div class="col-3"><div class="center-block grid-menu-item"><a href="https://greenearthheatingandair.com/ask-expert/"><span class="img-wrap"><img src="https://storage.googleapis.com/sos-websvc/images/default/ask-the-expert.jpg" alt="Ask the Expert"></span>Ask the Expert</a></div></div><div class="col-3"><div class="center-block grid-menu-item"><a href="https://greenearthheatingandair.com/furnace-heat-pump-air-conditioning-troubleshooting/"><span class="img-wrap"><img src="https://storage.googleapis.com/sos-websvc/images/default/troubleshooting.jpg" alt="DIY Troubleshooting"></span>DIY Troubleshooting</a></div></div></div></div>        		</div>
        	</div>
			<?php get_footer(); ?>