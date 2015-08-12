<?php get_header(); ?>

<section id="home-intro" class="photo promo" data-photo="<?php bloginfo('stylesheet_directory');?>/images/home-intro-bg.jpg">
	<div class="wrapper">
		<h2>
			<dl>
				<dt>The Point Church</dt>
				<dd>Pointing people to Jesus</dd>
			</dl>
		</h2>
	</div>
</section>

<section id="home-welcome">
	<div class="wrapper">
		<h3 class="section-head">Welcome</h3>
		<p>The Point Church is a movement of churches across the Triangle with one mission. We are all about pointing people to Jesus.  We want to help people take their next steps with him—no matter where they are in their faith. So there’s no need to dress up, pretend to be perfect, or worry about your past. We just want you to experience Jesus.</p>
		<div class="buttons">
			<a href="<?php echo bloginfo('url'); ?>/about/beliefs-baptism" class="button">Beliefs</a>
			<a href="<?php echo bloginfo('url'); ?>/about/staff" class="button">Staff</a>
		</a>
	</div>
</section>

<section id="home-worship" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Worship</h3>
		<h4 class="section-head-desc">Dynamic. Passionate. Diverse.</h4>
		<p>We design our Sunday worship services to help everyone experience the presence of God. The music is dynamic and high quality with a variety of worship styles and cultures represented. The goal of our worship is help people develop a passionate pursuit of Jesus.</p>
		<!--<div class="buttons">
			<a href="#" class="button">Times & Locations</a>
			<a href="#" class="button">What to Expect</a>
		</div>-->
	</div>
</section>

<section id="home-kids">
	<div class="wrapper">
		<h3 class="section-head">Kids</h3>
		<h4 class="section-head-desc">Engaging. Secure. Intentional.</h4>
		<p>We believe families are our first mission field and place a high priority on making sure your kids have an awesome experience. Not only will they be safe and secure, Kid Point uses age-appropriate teaching styles to point your kids to Jesus. Your kids will be begging to come back.</p>
		<div class="buttons">
			<a href="<?php echo bloginfo('url'); ?>/ministries/family-ministries" class="button">Family Ministries</a>
			<!-- Kid Point & Students -->
		</div>
		<span class="paint-splatter">
			<span id="orange"></span>
			<span id="green"></span>
			<span id="pink"></span>
			<span id="purple"></span>
			<span id="pink2"></span>
		</span>
	</div>
</section>

<section id="home-sermons" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Teaching</h3>
		<h4 class="section-head-desc">Compelling. Practical. Biblical.</h4>
		<p>Each message teaches the truths of the Bible in a compelling and meaningful way you can apply to your life.  You will experience live teaching at each of our campuses from dynamic local pastors. Click below to hear teaching from a campus close to you. </p>
		<div class="buttons">
			<a href="#" class="button">Listen to a Message</a>
			<!--Latest Message & Series Archive -->
		</div>
	</div>
</section>

<section id="home-locations">
	<div class="wrapper">
		<h3 class="section-head">Explore a Campus</h3>
		<h4 class="section-head-desc">A Movement in Many Locations.</h4>
		<p>Experience the the intimacy of a local church combined with power of collaboration resulting in a movement across the Triangle. At each of our campuses you will receive live in person teaching and engaging worship.</p>
		<ul class="locations">

			<a href="<?php bloginfo('url'); ?>/locations/apex">
				<li class="apex">
					<dl>
						<dt>Apex</dt>
						<dd>9am &amp; 11am</dd>
					</dl>
				</li>
			</a>
			<a href="<?php bloginfo('url'); ?>/locations/cary">
				<li class="cary">
					<dl>
						<dt>Cary</dt>
						<dd>9am &amp; 11am</dd>
					</dl>
				</li>
			</a>
			<a href="<?php bloginfo('url'); ?>/locations/espanol">
				<li class="espanol">
					<dl>
						<dt>Español</dt>
						<dd>4pm</dd>
					</dl>
				</li>
			</a>
			<a href="<?php bloginfo('url'); ?>/locations/raleigh">
				<li class="raleigh">
					<dl>
						<dt>Raleigh</dt>
						<dd>10am</dd>
					</dl>
				</li>	
			</a>
		</ul>

		<div class="buttons">
			<a href="#" class="button" id="map-expand">Find Campus Closest to Me</a>
		</div>
	</div>
</section>

<section id="map-canvas"></section>

<section id="home-leadership" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Leadership</h3>
		<p>The Point Church is not built around the personality of one person but operates with a team of leaders devoted to pointing people to Jesus.</p>
		<div class="buttons">
			<a href="<?php echo bloginfo('url'); ?>/about/staff/leadership-team" class="button">Meet Our Team</a>
		</div>
	</div>
</section>




<?php get_footer(); ?>