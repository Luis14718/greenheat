<?php
/*
Template Name: home
*/

get_header('theme'); 


while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
<div class="entry-content-page">
    <?php the_content(); ?> <!-- Page Content -->
</div><!-- .entry-content-page -->
<?php

endwhile;
?>


<article class="topics-background row no-padding">
		<div class="col-xs-12">
							                <div id="featured-reviews">
                    <div class="row">
                                                    <div class="col-xs-12 col-sm-3 col-lg-4">
                                <a href="<?php echo get_bloginfo('url');?>/about/reviews/"><img class="img-responsive center-block" src="<?php echo get_bloginfo('url');?>/images/core/reviews-stars.png" alt="Reviews for Air Flow Pros Heating &amp; Air Conditioning"></a>
                            </div>
                            <!--/.col-->
                            <div class="col-xs-12 col-sm-9 col-lg-8 text-center-sm">
                            
                                <div class="row">
                                                                            <div class="col-md-12">
                                                                                    </div>
                                                                    </div>

                                <div class="testimonial"><p class="no-reviews"><em>There are currently no reviews.</em></p><p>Be the first to <a href="<?php echo get_bloginfo('url');?>/about/reviews/    ">write a review</a>.</p></div>

                                </div>
                            </div>
                    </div>
    			
		</div>
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

<div class="row background-white">
		<div class="col-xs-12 hidden-xs home-blurb">

			<h1>Proudly serving the Bay Area &amp; Beyond</h1><p>Air Flow Pros Heating &amp; Air Conditioning is dedicated to providing the best possible solution for your home or business. You can count on us to provide you with a system and solution that fits your unique needs and since we've installed many systems in this area, we've earned a reputation for doing the job right the first time.</p>

		</div>
		<!--/.col-->
	</div>
</main>
    <div class="row padding-bottom-30">
	<div class="col-xs-12 col-sm-6 col-md-4 home-col">
		<section>
			<h2>Our Products</h2>
			<a href="<?php echo get_bloginfo('url');?>/heating-air-conditioning-products/"><img src="<?php echo get_bloginfo('url');?>/images/home/registered-amstd-logo.png" alt="American Standard Logo" style="max-width:100px;" class="img-responsive pull-left"></a>
			<p>As a American-Standard dealer, with a wide variety of products to choose from, we can keep your family healthy and feeling comfortable all year long. We carry a complete line of indoor comfort equipment with innovations that raise the standards of comfort and reliability, including <a href="<?php echo get_bloginfo('url');?>/products/air-conditioners/">air conditioners</a>,&nbsp;<a href="<?php echo get_bloginfo('url');?>/products/heat-pumps/">heat pumps</a>, <a href="<?php echo get_bloginfo('url');?>/products/gas-furnaces/">gas furnaces</a>, <a href="<?php echo get_bloginfo('url');?>/products/thermostats/">programmable thermostats</a>, <a href="<?php echo get_bloginfo('url');?>/products/humidifiers/">humidifiers</a>, <a href="<?php echo get_bloginfo('url');?>/products/duct-free-systems/">ductless split systems</a>, <a href="<?php echo get_bloginfo('url');?>/products/air-cleaners/">air cleaners</a>, <a href="<?php echo get_bloginfo('url');?>/products/ultra-violet-lights/">ultra violet lights</a>, <a href="<?php echo get_bloginfo('url');?>/products/ventilators/">ventilators</a> and <a href="<?php echo get_bloginfo('url');?>/products/zoning/">zoning products</a>. Let the experts at Air Flow Pros Heating &amp; Air Conditioning&nbsp;help you customize a solution that's right for you.</p>
			<a href="<?php echo get_bloginfo('url');?>/heating-air-conditioning-products/" class="btn btn-secondary btn-default">Learn More&nbsp;<span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span> </a>
		</section>
	</div>
			<div class="col-xs-12 col-sm-12 col-md-4 home-col hidden-xs hidden-sm">
			<aside>
				<h2>Promotions</h2>
				<div class="ads-wrapper center-block">
					<div class="carousel slide ads-rotator" data-ride="carousel"><div class="carousel-inner" role="listbox"><div class="item active"><img src="https://greenearthheatingandair.com/wp-content/uploads/2021/08/brand_16_2.jpg" alt="American Standard AccuComfort Heat Pump"></div></div></div>				</div>
			</aside>
		</div>
		<div class="col-xs-12 col-sm-6 padding-bottom-30 col-md-4 home-col">
		<section>
			<h2>Our Services</h2>
			<a href="<?php echo get_bloginfo('url');?>/heating-air-conditioning-services/"><img src="<?php echo get_bloginfo('url');?>/images/home/ac_repair_100w.png" class="img-responsive pull-left" alt="Wrench Icon" style="max-width:100px;"></a>
			<p>We are service professionals! As licensed contractors and specialists in the field of heating and air-conditioning, we have the tools, the equipment, and the experience to keep your equipment running smoothly all year long. If it is <a href="<?php echo get_bloginfo('url');?>/services/repair/">emergency service</a> that you need, twenty-four hours a day, seven days a week, we are available to assist you! To help reduce service emergencies, we offer <a href="<?php echo get_bloginfo('url');?>/services/service-agreements/">service agreements</a> to keep your comfort system running at peak performance.</p>
			<a href="<?php echo get_bloginfo('url');?>/heating-air-conditioning-services/" class="btn btn-secondary btn-default">Learn More&nbsp;<span class="glyphicon glyphicon-chevron-right " aria-hidden="true"></span> </a>
		</section>
	</div>

	<div class="col-xs-12">
		<h2 class="text-center">We service and repair all brands!</h2>
			</div>
</div>

<div class="row video-promo-row seasonal-videos">
<img src="https://localhost/greenearth/wp-content/uploads/2021/07/seasonal-video-background.jpg" alt="">
	</div>

    <section class="our-org-offers">
	<div class="row background-white">
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">

			<section>
				<h2>Our Organization Offers</h2>
				            <div class="home-bullets">

                <div class="row home-bullets-three-column visible-lg-block">
                    <div class="col-4">
                        <ul class="home-bullets-list"><li>Residential Heating &amp; Air Conditioning Products</li><li>Commercial HVAC Services</li><li>Installation &amp; Replacement</a></li><li>Trained Technicians</li></ul>                    </div>
                    <div class="col-4">
                        <ul class="home-bullets-list"><li>Equipment Retrofit &amp; Replacement</li><li>Preventative Maintenance</li><li>Extended Service Agreements</li><li>Extended Warranties on New Equipment</li></ul>                    </div>
                    <div class="col-4">
                        <ul class="home-bullets-list"><li>Indoor Air Quality Specialists</li><li>Service All Makes &amp; Models</li></ul>                    </div>
                </div>

                


            </div>
			</section>
		</div>
		<!--/.col-->

		<div class="hidden-xs col-sm-4 col-md-4 col-lg-3 hours text-center-xs">
			<h3><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Hours</h3>
			<div><p><span content="Mo,Tu,We,Th,Fr 08:00-17:00">Mon-Fri : 8:00am - 5:00pm</span><br><span content="Sa 09:00-14:00">Sat: 9:00am - 2:00pm</span><br><span class="text-danger">24/7 Emergency Service</span></p></div>			<h3><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Payment Accepted</h3>
			<div><ul><li>Cash</li><li>Check</li><li>Credit Cards</li><li style="margin: 0; padding: 0;"><img src="<?php echo get_bloginfo('url');?>/images/home/credit-cards-visa.png" alt="Visa" class="credit-card-logo"><img src="<?php echo get_bloginfo('url');?>/images/home/credit-cards-mastercard.png" alt="Master Card" class="credit-card-logo"><img src="<?php echo get_bloginfo('url');?>/images/home/credit-cards-discover.png" alt="Discover" class="credit-card-logo"><img src="<?php echo get_bloginfo('url');?>/images/home/credit-cards-amex.png" alt="Amercian Express" class="credit-card-logo"></li></ul></div>		</div>
		<!--/.col-->
	</div><!-- /.row -->
</section>




<?php get_footer(); ?>