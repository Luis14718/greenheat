<?php
/*
Template Name: review
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

<section class="container">
    <div class="row" id="page-main-content">
        <div class="col-xs-12">
        	<div class="row">
        		<div class="col-xs-12">
        			<h1>Reviews</h1>        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3 col-lg-2 hidden-xs">
        			<img class="featured-image" src="<?php echo get_bloginfo('url');?>/sos-websvc/images/default/review.jpg" alt="Reviews">        		</div>
        		<div class="col-sm-9 col-lg-10">
        			<div class="visible-xs-block featured-image-wrapper">
        				    			</div>
                                    <div id="reviews">
                    <div class="row">
                        <div class="col-xs-12">
                            <p>At Air Flow Pros Heating &amp; Air Conditioning we strive for 100% satisfaction in everything we do.  We value your opinion and invite you to tell us and others about your experience with us.  Please take a few moments to tell us what you think by leaving us a <a class="review-here" href="#">review here on our website</a> or on any of these popular review sites or social networks.</p><br><div class="review-site-group topSection"><p><em><strong>Log in with your account to review at these sites:</strong></em></p><a href="https://www.google.com/search?client=firefox-b-1-d&amp;q=air+flow+pros+heating+%26+air+conditioning+san+francisco+ca#lrd=0x808f7dd6a1e1b8cb:0x295a15bbabd7eaa3,1,,," target="_blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/google_logo_1-15-2019.png" alt="Google Logo" class="review-site-logo"></a><a href="https://www.bbb.org/us/ca/san-francisco/profile/air-conditioning-contractor/air-flow-pros-heating-air-conditioning-1116-372358/customer-reviews" target="_blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/bbb-horizontal.png" alt="Better Business Bureau (Accredited) Logo" class="review-site-logo"></a></div><div class="review-site-group"><p><em><strong>Log in with your Facebook account to review at these sites:</strong></em></p><a href="https://www.yelp.com/biz/air-flow-pros-heating-and-air-conditioning-san-francisco" target="_blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/yelp-logo2.png" alt="Yelp Logo" class="review-site-logo"></a></div><div class="review-site-group"><p><em><strong>Feeling social?</strong></em></p><a href="https://www.google.com/maps/place/Air+Flow+Pros+Heating+%26+Air+Conditioning/@37.7390978,-122.4369154,15z/data=!4m5!3m4!1s0x0:0x295a15bbabd7eaa3!8m2!3d37.7390978!4d-122.4369154" target="blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/images/logos/google-g-icon.png" alt="Google Logo" class="review-site-logo"></a><a href="https://www.bbb.org/us/ca/san-francisco/profile/air-conditioning-contractor/air-flow-pros-heating-air-conditioning-1116-372358" target="blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/files/mobile/images/bbb.png" alt="Better Business Bureau Logo" class="review-site-logo"></a><a href="https://www.yelp.com/biz/air-flow-pros-heating-and-air-conditioning-san-francisco" target="blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/files/mobile/images/yelp.png" alt="Yelp Logo" class="review-site-logo"></a><a href="http://www.diamondcertified.org/report/air-flow-pros" target="blank"><img src="<?php echo get_bloginfo('url');?>/sos-websvc/uploads/0014869DEA000898/images/diamond-certified-wht.png" alt="Diamond Certified Logo" class="review-site-logo"></a></div><p style="margin-top:0px;font-size:8px"><em>All trademarks or brands on this page are registered by their respective owner and are not affiliated with our company, nor do they endorse or sponsor our products or services.</em></p>                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="button" class="btn write-review-button btn-secondary btn-lg">Write a Review Now!</button>
                            <div id="write-review">
                                <form action="https://sos-apps.appspot.com/website/form-handlers/process-review.php" method="post" name="review-form" id="review-form">
                                    <input type="hidden" name="dealerID" value="0014869DEA000898">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email (won't be used on site)</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City, State</label>
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                    <div class="form-group">
                                        <label for="item">Service or Product Purchased</label>
                                        <input type="text" class="form-control" name="item" id="item">
                                    </div>
                                                                        <div class="form-group">
                                        <label for="score">Star Rating</label>
                                        <div id="star" style="margin-bottom: 5px; margin-top: 2px; cursor: pointer;"><i data-alt="1" class="star-on-png" title="poor"></i>&nbsp;<i data-alt="2" class="star-on-png" title="needs improvement"></i>&nbsp;<i data-alt="3" class="star-on-png" title="average"></i>&nbsp;<i data-alt="4" class="star-on-png" title="good"></i>&nbsp;<i data-alt="5" class="star-on-png" title="excellent"></i><input name="score" type="hidden" value="5"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="review">Review</label>
                                        <textarea id="review" class="form-control" name="review"></textarea>
                                    </div>
                                    <div id="recaptcha-page" class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7wiUTAAAAAG-hCuWRcM2y2iVhXwgujyFy8Km9&amp;co=aHR0cHM6Ly93d3cuYWZwaGVhdGluZy5jb206NDQz&amp;hl=en&amp;v=vzAt61JclNZYHl6fEWIBqLbe&amp;size=normal&amp;cb=kevkhnqdoy3d" width="304" height="78" role="presentation" name="a-in2paasj5t90" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>                                    <input type="submit" class="btn submit-review btn-secondary" id="submit-button" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="reviews-list">
                        <div class="col-xs-12">
                                                    </div>
                    </div>
                </div>
                    		</div>
        	</div>
		</div>
    </div><!--/#page-main-content -->
</section>
<?php get_footer(); ?>