<?php
/*
Template Name: Contact us
*/

get_header('theme'); 

?>
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
                    <h1>Contact Us</h1>                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-lg-2">
                    <img class="featured-image" src="<?php echo get_bloginfo('url');?>/sos-websvc/images/default/contact-us.jpg" alt="Contact Us">                </div>
                <div class="col-sm-9 col-lg-10">
                    <p>Air Flow Pros Heating &amp; Air Conditioning is here to help. Please, give us a call&nbsp;to make an appointment for service.</p>
<div class="contact-address"><h2><span>Air Flow Pros Heating &amp; Air Conditioning</span></h2><div class="row"><div class="col-sm-6"><div><p class="no-heading"><span>2595 Mission Street, Ste 202</span><br><span>San Francisco</span>, <span>CA</span> <span>94110</span><br><a id="maplink" href="https://www.google.com/maps/place/2595+Mission+Street%2C+Ste+202,San+Francisco,CA,94110" itemprop="maps" target="_blank">Click for Map</a></p><p>Phone: <span><strong><a href="tel:4154005140">415-400-5140</a></strong></span></p></div></div></div><p>Fax: <span>415-988-7377</span></p><h3><b>HOURS</b></h3><div><p><span content="Mo,Tu,We,Th,Fr 08:00-17:00">Mon-Fri : 8:00am - 5:00pm</span><br><span content="Sa 09:00-14:00">Sat: 9:00am - 2:00pm</span><br><span class="text-danger">24/7 Emergency Service</span></p></div><div class="payment-accepted-contact"><h3><b>PAYMENT ACCEPTED</b></h3><div><ul><li>Cash</li><li>Check</li><li>Credit Cards</li><li style="margin: 0; padding: 0;"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/credit-cards-visa.png" alt="Visa" class="credit-card-logo"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/credit-cards-mastercard.png" alt="Master Card" class="credit-card-logo"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/credit-cards-discover.png" alt="Discover" class="credit-card-logo"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/credit-cards-amex.png" alt="Amercian Express" class="credit-card-logo"></li></ul></div></div></div>                </div>
            </div>
        </div>
    </div><!--/#page-main-content -->
</section>
<?php get_footer(); ?>