
<?php
/*
Template Name: ask
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
        			<h1>Ask the Expert</h1>        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-3 col-lg-2 hidden-xs">
        			<img class="featured-image" src="https://storage.googleapis.com/sos-websvc/images/default/ask-the-expert.jpg" alt="Ask the Expert">        		</div>
        		<div class="col-sm-9 col-lg-10">
        			<div class="visible-xs-block featured-image-wrapper">
        				<img class="featured-image" src="https://storage.googleapis.com/sos-websvc/images/default/ask-the-expert.jpg" alt="Ask the Expert">        			</div>
        			            <div class="ask-expert">
                <div class="row">
                    <div class="col-xs-12">
                        <p>You've got questions and the experts at Air Flow Pros Heating &amp; Air Conditioning have the answers. Below you'll find a collection of previous questions and the expert answers. If you'd like an answer to your question, just click the link below, enter your question and the experts will get you an answer.</p>
                        <p><button type="button" class="btn ask-question btn-secondary btn-lg">Ask Your Question</button></p>
                        <div id="write-expert">
                            <form action="https://sos-apps.appspot.com/website/form-handlers/process-expert.php" method="post" name="expert-form" id="expert-form">
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
                                    <label for="question">Question</label>
                                    <textarea class="form-control" id="question" name="question"></textarea>
                                </div>
                                <div id="recaptcha-page" class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7wiUTAAAAAG-hCuWRcM2y2iVhXwgujyFy8Km9&amp;co=aHR0cHM6Ly93d3cuYWZwaGVhdGluZy5jb206NDQz&amp;hl=en&amp;v=ecapuzyywmdXQ5gJHS3JQiXe&amp;size=normal&amp;cb=9t0gj2bi6pml" width="304" height="78" role="presentation" name="a-aiopbomxa9ct" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>                                <input type="submit" class="btn submit-expert btn-secondary" id="submit-button" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Recently Asked Questions</h2>
                        <div class="faq"><h3 class="faq-question"><a href="#">What is the average life expectancy of equipment?</a></h3><div class="faq-answer"><p>Most systems have a lifetime of 10 to 20 years. As your equipment gets older, it's efficiency can decrease dramatically. You may notice that it gets noisier and needs repairs more often. When a unit begins to show it's age, you have two choices. You can overhaul the system or replace it. Because heating and cooling technologies improve over time, a new system designed with newer, more energy-efficient equipment makes sense, especially if your system is 10 or more years old. We can estimate the cost of a new system as well as a payback schedule that will show you how newer technology will pay you back in lower energy usage.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">Can I just replace the outdoor unit on an older system to save money?</a></h3><div class="faq-answer"><p>No. Replacing only the outdoor unit will lower the efficiency of the unit. In fact, you can lose up to 15% of the unit's efficiency! Even worse, your system may fail sooner than normal and most manufacturers' warranties will be voided. You should always replace the indoor cooling coil with the outdoor unit.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">Will a bigger sized system perform better?</a></h3><div class="faq-answer"><p>No, you don't want your air conditioner to be too big. Air conditioners control the comfort level in your home by cooling the air and by removing humidity. An oversized air conditioner will cool your home faster, but it will use more energy and will not remove humidity adequately.<br><br>A unit that is too big for your home will have short run cycles. It may take only a short time to cool the air, but the unit shuts off before enough air blows across the indoor coil where moisture condenses into water and drains from your system. Too much moisture left in the air can lead to mold and mildew problems.<br><br>These short run cycles also mean your system starts and stops more often which uses more energy and causes a lot of wear and tear. An air conditioner operates more efficiently during long run cycles.</p><p>The same holds true with heating systems. An oversized furnace will warm the house quicker, but it uses more fuel and causes greater temperature swings in the home.</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">Why is a system with matched components so important?</a></h3><div class="faq-answer"><p>A matched system is important for a variety of reasons. One is comfort. When all your components are properly sized to your home, you can control exactly how much heating or cooling you need so you can relax. Also, a properly sized matched system enables every component to perform as designed, meaning proper cycle times are maintained, humidity is controlled, and system sound is minimized.</p>

<p>Another reason matched systems are important is efficiency. Most systems people buy are too large for their homes, which uses more energy than needed for your home. A matched system outlined by a dealer who has completed a load calculation for your home provides just the right amount of heating and cooling you need so you get the most value for your utility dollar.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">How often should I change my air filter?</a></h3><div class="faq-answer"><p>At the risk of telling you something you're tired of hearing, replace the air filter in your furnace on a regular basis. Dirty air filters reduce the amount of air flowing through a system and make the furnace work harder to maintain the temperature. How often you change the filter depends on the type of filter you use, if you have pets, and the size of your equipment. Please give us a call and we can give you proper guidance.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">Why should I switch to a high efficiency air filter?</a></h3><div class="faq-answer"><p>Proper air filtration is just as important to the health of your heating and cooling system as it is to the health of your family. Without proper filtration, dust and dirt can build up on your system which impacts operation and efficiency. A high-efficiency filter will remove more dust, dirt, pollen, mold, and other particles from the air. If you suffer from allergies or other respiratory problems, you should strongly consider a high-efficiency filter. No matter what type of filter you have,&nbsp;make sure you change it regularly.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">Should I have my furnace and air conditioner serviced every year?</a></h3><div class="faq-answer"><p>Yes. Keeping your system properly maintained will lower energy and repair costs, prevent breakdowns, and prolong the life of your equipment. Neglecting necessary maintenance ensures a steady decline in air conditioning performance while energy use steadily increases.</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">Why should I purchase a service agreement?</a></h3><div class="faq-answer"><p>Without warranty coverage, a breakdown can mean significant expense in parts, labor, or both. However, with one of our service agreements, you avoid that unexpected significant expense. While no warranty can guard against every possible problem, we can explain the broad range of protection our service agreements afford.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">How can I reduce allergens and improve the air quality in my home?</a></h3><div class="faq-answer"><p>With a high efficiency air cleaner, you can remove up to 99% of the pollen and spores that find their way into the home. There is also a great reduction in household dust, dirt, smoke, and other air pollutants. Your indoor air will become cleaner and fresher while reducing the allergens and dust that circulate throughout the house. With a whole house humidifier, you can relieve the irritating discomfort of dry indoor air. The humidifier reduces itchy skin, scratchy throats, static electricity, and damage to your furnishings and woodwork. Since humid air feels warmer than dry air, you do not have to set the thermostat as high to feel the comfort you want. A lower thermostat setting will reduce the costs of your energy bill.</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">I am concerned about mold growth, what should I do?</a></h3><div class="faq-answer"><p>Molds are part of the natural environment. Outdoors, molds play a part in nature by breaking down dead organic matter such as fallen leaves and dead trees, but indoors, mold growth should be avoided. Molds reproduce by means of tiny spores; the spores are invisible to the naked eye and float through outdoor and indoor air. Mold may begin growing indoors when mold spores land on surfaces that are wet. There are many types of mold, and none of them will grow without water or moisture. <a href="https://www.epa.gov/mold" target="_blank">Click here</a> to learn more about mold prevention in your home from the EPA.<br>
<br>
When humid air passes over chilled cooling coils, water condenses and drips through the coils into a collection pan, from which it continuously drains. Problems with these systems may occur when this water collects and becomes stagnant when it becomes blocked, either on the coils or in the drip pan. The pan will grow mold that can infect your home with dangerous mold spores very quickly. Problems also exist when the HVAC ducting contains microscopic mold spores that stay continually present and blow contaminants around the home or office often caused by mold in other parts of your home.<br>
<br>
You can do 3 things to prevent mold growth in your system:</p>

<ol>
	<li>Preventative maintenance will ensure that the collection pan under the indoor coil stays clean and clog free.</li>
	<li>Install ultra violet lights next to the cooling coils to kill any mold or bacteria growing on the coils or collection pan.</li>
	<li>Keep your ductwork clean and use a high-efficiency filtration system to keep your entire HVAC system clean.</li>
</ol>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">What does SEER, AFUE, and HSPF ratings mean to me?</a></h3><div class="faq-answer"><p>SEER, AFUE and HSPF are all measures of energy efficiency. Air conditioners may look similar, but their Seasonal Energy Efficiency Rating (SEER) can vary widely. Higher SEER numbers save more money spent on electricity. A 13 SEER air conditioner, the EPA "current minimum standard", uses 23% less energy than a 10 SEER unit (EPA standard up until Jan. 2006). Even though 13 SEER is the minimum efficiency available, we currently offer a line of air conditioners that start at 13 SEER and go all the way up to a 21 SEER . Depending on your average usage, higher SEER air conditioners can significantly reduce your electric bill.<br>
<br>
Heat pumps have SEER ratings like air conditioners and Heating Seasonal Performance Factor (HSPF) ratings for measuring heating efficiency. Higher HSPF ratings mean greater energy savings. The HSPF scale range is 7.5 to 13.0.</p>

<p>Today's new high-efficiency furnaces can save up to 50% in operating costs over a ten-year-old furnace. Many 1990 and earlier model furnaces have Annual Fuel Utilization Efficiency (AFUE) ratings of 65% or less. The minimum AFUE rated furnace that can be sold in the United States as of May 1, 2013 is 80% in southern states and 90% in northern states.<br>
<br>
Our current product offering starts at this minimum AFUE rating and goes all the way to a very efficient 98.3% AFUE rating. Depending on your average usage, higher AFUE rated furnaces can significantly reduce your gas bill.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">How can I reduce my energy costs?</a></h3><div class="faq-answer"><p><b>Cooling</b></p>

<ul>
	<li><b>Upgrade to a high-efficiency air conditioner</b> - Swapping your old, inefficient air conditioning system for a high-efficient one can cut electricity bills by one-third. Consult one of our professional technicians to ensure your system is the right size for your home, and you aren't over- or under-cooling for your space needs.</li>
	<li><b>Turn up the temperature</b> — To save electricity during the summer, set the temperature above 75° as every degree below this will add an extra three to five percent to your energy bill.</li>
	<li><b>Install ceiling fans</b> — Change the direction of airflow on your ceiling fans. In the summer, the blades should operate in a counter-clockwise direction as a way of creating a nice, gentle wind.</li>
	<li><b>Have an annual maintenance performed</b> — Having an annual maintenance performed on your air conditioner by a licensed technician will help ensure it operates at its peak efficiency and catches any potential breakdowns before they occur.</li>
	<li><b>Don't block vents in well-used rooms</b> — Keep your supply and return air vents free of objects like blinds, carpets or furniture so your air conditioner can operate efficiently and there is even cool air distribution.</li>
</ul>

<p><b>Heating</b></p>

<ul>
	<li><b>Upgrade to a high-efficiency furnace</b> — New high-efficiency furnaces use up to 50% less fuel than an older system. It can save you up to 25 percent of your home-heating costs in one year, and within a few years, you'll have recovered the initial cost of replacing/upgrading your furnace. Choosing a model with an energy efficient motor can save 20 to 50 percent of the energy needed to continuously operate a fan motor. Let us show you the advantages of replacing your old furnace today.</li>
	<li><b>Have an annual maintenance performed</b> — Having an annual maintenance performed on your furnace by a licensed technician will help ensure it operates at its peak efficiency and catches any potential breakdowns before they occur.</li>
	<li><b>Install a programmable thermostat</b> — A programmable thermostat enables you to control your home's temperature when you're away or asleep. For every 1° you lower your thermostat for seven hours per day, you save one percent on your heating bill.</li>
	<li><b>Don't block vents in well-used rooms</b> — Keep your supply and return air vents free of objects like blinds, carpets or furniture so your furnace can operate efficiently and there is even heat distribution.</li>
	<li><b>Install ceiling fans</b> — Change the direction of airflow on your ceiling fans. In the winter, the blades should operate in a clockwise direction helping to push the warm air from the ceiling down into the room.</li>
</ul>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">Why should I buy Energy Star labeled equipment?</a></h3><div class="faq-answer"><p>The average home spends about $1,900 annually on energy bills. Heating and cooling accounts for as much as half of a home's energy use. The EPA provides important recommendations for energy-efficient equipment, including proper sizing, quality installation and maintenance, and other home improvement considerations to help you get the most out of the heating and cooling products you purchase, save energy, and save as much as 20% annually on your total energy costs.</p><p>ENERGY STAR qualified products prevent greenhouse gas emissions by meeting strict energy efficiency guidelines set by the U.S. Environmental Protection Agency (EPA) and the U.S. Department of Energy (DOE).</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">What is a Heat Pump?</a></h3><div class="faq-answer"><p>Heat pumps are a great solution for your home comfort system because they work to provide both heating and cooling. Heat pumps have SEER ratings like air conditioners and Heating Seasonal Performance Factor (HSPF) ratings for measuring heating efficiency. Higher SEER and HSPF ratings mean greater energy savings.</p>

<p>Heat pumps are a very efficient alternative to electric heat. A heat pump works the same as an air conditioner in the summer, but it runs in reverse in the winter to heat your home. The system will be matched with a backup heating source, most often electric heat for those extremely cold days of winter.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">What is a Hybrid Heat Dual Fuel system?</a></h3><div class="faq-answer"><p>With a traditional heating and cooling system, if you wanted to save more, you had to use less. But a Hybrid Heat system combines the benefits of intelligent control for both gas and electric heating to create an intuitive system that can actually react to changing conditions.</p>

<p>No matter what the temperature is outside, a Hybrid Heat system will automatically select the fuel source most efficient for your home, which means you'll stay warm in the winter, cool in the summer and save money all year long.</p>

<p>To design a Hybrid Heat system for your home, we professionally match one of our heat pump units with a natural gas furnace. Contact us to see how much energy you can save over your existing system.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">What are the advantages of equipment with variable speed fans?</a></h3><div class="faq-answer"><p>Variable speed fans operate on a simple principle: they are able to spin at different speeds depending on the heating and cooling needs of your home. Usually, they operate at lower speeds, delivering a steady, reliable stream of warm or cool air to your home. This helps control humidity levels, utility costs and system noise. When conditions become more extreme, the fan speed increases so that the system can meet increased demand, guaranteeing that on even the hottest days or coldest nights, you're comfort needs will be met.</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">How does 2-Stage heating or cooling work?</a></h3><div class="faq-answer"><p>2-stage cooling is a method of cooling that can better manage the cooling of your home while outdoor temperatures are changing. It can also better maximize indoor comfort and energy efficiency. 2-stage cooling systems are typically the most energy efficient systems out there.</p>

<p>2-stage cooling can be done by having one unit with two compressors, one small and one large. The small one is typically capable of putting out about 50% the capacity of the larger one. The second way to have 2-stage cooling is to have a single scroll unloading compressor. This compressor can unload its capacity down to about 66% of maximum capacity. Both these methods of getting 2-stage cooling allow the unit to run at a lower stage when the high stage is not needed. By doing this, energy is saved.</p>

<p>2-stage heating has the same principle as 2-stage cooling. It allows the unit to adjust itself based on the amount of heating that is necessary. 2-stage heating is a good way to save on heating costs.</p>

<p>A heat pump system would have two different sized compressors, a small and a large one. The compressor that is used at a given time would depend upon the need. If only a small amount of heating is necessary, the smaller compressor would be used to save energy. The large compressor would only be used when a large amount of heating was needed.</p>

<p>A gas furnace that is 2-stage has a modulating gas valve that regulates gas flow depending upon the need.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">At what temperature should I set my thermostat?</a></h3><div class="faq-answer"><p>Normal cooling settings are 75 degrees - 80 degrees. Normal heating settings are 68 degrees - 72 degrees. You should always set your thermostat to the highest possible setting that is comfortable for you in the summer, and the lowest comfortable setting in the winter. Setting your thermostat in this way will maximize your energy savings. On average, every 1 degree of temperature change is equal to about 1% energy savings. For example, changing your thermostat setting from 75 degrees to 76 degrees in the summer could result in savings on your cooling costs.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">My system doesn't work well in a couple of rooms, what should I do?</a></h3><div class="faq-answer"><p>This can occur for many reasons; uneven solar heat load through windows, an undersized system, improperly balanced or clogged system or a single system serving a two-story home with no zoning control. Each situation is different, usually requiring an onsite analysis with problem specific recommendations. Please call to arrange for us to see your home.</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">Is Freon as a refrigerant being discontinued?</a></h3><div class="faq-answer"><p>Yes. As of January 2010 the refrigerant R-22 (what consumers call Freon®) is no longer allowed to be used in the manufacturing of new equipment. R-22 has been used as the "standard" refrigerant for many years but has been found to be harmful to our planet by our government. All new air conditioners and heat pumps use R-410A, the more "environmentally sound" refrigerant.</p>

<p>R-22 is still the most commonly used refrigerant in existing air conditioning equipment in residential homes today. However, per the Montreal Protocol, caps have been established to eliminate the production of R-22. In 2004, there was a 35% reduction; in 2010 there was a 65% reduction; in 2015 a 90% reduction; and finally in 2020 a 99.5% reduction in the production of R-22. This means that during the time of these reductions with high demand, the price of each pound of R-22 refrigerant could potentially skyrocket.</p>

<p>If you are considering replacing your existing air conditioning equipment, most higher efficiency products have already made the switch to R-410A, the more "environmentally sound" refrigerant.</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">My air conditioner is very loud when I entertain outside, what can I do?</a></h3><div class="faq-answer"><p>A difference of 6 decibels (such as between 72 dB and 78 dB) is technically a four-fold increase in compressor sound when rating air conditioners or heat pump units. However, it takes a difference of 10 decibels to double the loudness. It is also noted that it takes approximately 3 decibels for the average human ear to discern any difference in loudness at all.</p><p>Great strides have been made in reducing the operating sound level of equipment. We will be happy to show you the difference in sound ratings with our product line.</p></div></div><div class="faq"><h3 class="faq-question"><a href="#">Can carbon monoxide build up in my home?</a></h3><div class="faq-answer"><p>Yes. Each year, carbon monoxide kills more than 200 Americans and sends nearly 5,000 more to emergency rooms for treatment, reports the U.S. Consumer Product Safety Commission (CPSC). Where does it come from? When carbon-based fuels such as gas, oil, kerosene or wood burn, they produce gases. When fuel combustion or burning isn't complete, carbon monoxide enters the air. The CPSC advises that carbon monoxide detectors are the only way to alert yourself to the presence of toxic gas in your home. If you wake in the night with a headache -- and especially if another member of the family complains of a headache or is difficult to arouse -- get out of the house fast and seek medical help. We recommend carbon monoxide detectors be installed in your home!</p>
</div></div><div class="faq"><h3 class="faq-question"><a href="#">What if I smell gas?</a></h3><div class="faq-answer">p&gt;<b>Propane (LP) gas:</b>  You have this type if your gas comes from a tank located outside close to your house. Propane is stored as a liquid under pressure in tanks and cylinders. In most residential applications, propane is used as a vapor. When liquid propane changes into a gas vapor, it expands in volume. This means that even a small leak of liquid propane can result in a much larger quantity of propane vapor, which can be especially dangerous in a confined space. A chemical odorant has been added to propane to give it a distinct smell. Learn to identify this odor. Propane gas is heavier than air, so it will sink to the floor and spread. To check for the presence of propane, carefully smell all over a room, especially in low spots.<p></p><p>If you smell propane (LP) gas:</p><ul><li>Exit your home immediately.</li><li>Propane gas can ignite easily. Do not light a match, start an engine, use a cell phone, or do anything that may create a spark.</li><li>From a safe area, contact your propane supplier and call 911.</li><li>If you are able, shut the propane gas supply off at the tank.</li><li>Stay away from your home until you've been told that it is safe to return.</li></ul><p><b>Natural gas:</b> You have this type if you have a gas meter and pay a natural gas supplier or utility. A chemical odorant has been added to natural gas to give it a distinct smell. Learn to identify this odor.</p><p>If you smell natural gas:</p><ul><li>Exit your home immediately.</li><li>Do not light a match, start an engine, use a cell phone, or do anything that may create a spark.</li><li>From a safe area, contact your gas company or call 911.</li><li>If you are able, turn the gas off at the meter.</li><li>Stay away from your home until you've been told that it is safe to return.</li></ul></div></div>                    </div>
                </div>
            </div>
        		</div>
        	</div>
		</div>
    </div><!--/#page-main-content -->
</section>





<?php get_footer();?> 