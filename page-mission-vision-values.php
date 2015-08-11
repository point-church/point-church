<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php include('page-header.php'); ?>

<?php while ( have_posts() ) : the_post(); ?>



	<section id="mission-vision-values">
		
		<div class="wrapper">
			<div class="mission">
				<h3>Our Mission</h3>
				<p>The Point Church is all about pointing people to Jesus.</p>
			</div>
			<div class="vision">
				<h3>Our Vision</h3>
				<p>To plant 30 churches in the triangle area in the next 15 years (2025) through making disciples that disciple others and planting churches that plant churches.</p>
			</div>
			<div class="values">
				<h3>Our Values</h3>
				<ul class="styled-list">
					<li><strong>Invest and Invite</strong> We intentionally invest our lives into people who are far from 	God and invite them to know Christ.</li>
	
					<li><strong>Contributors not Consumers</strong> We do not settle for being religious consumers but 	desire for every person to contribute to the cause of Christ.</li>
	
					<li><strong>Better Together</strong> We can do more by working together than we can apart both as 	believers and churches.</li>
	
					<li><strong>Where God Guides He Provides</strong> We take bold steps of faith because God will always 	provide for what he calls us to do.</li>
	
					<li><strong>Help the Hurting</strong> We have a heart to help the hurting and in doing so we serve 	Christ. (Matthew 25:40)</li>
	
					<li><strong>Disciples Make Disciples</strong> We will reach our community and world by making 	disciples who make disciples and planting churches who plant churches.</li>
	
					<li><strong>Families Our First Mission Field</strong> We prioritize reaching and discipling the 	families God has already entrusted us.</li>
	
					<li><strong>Love the Local Church</strong> We love the local church because it is the bride of Christ 	and primary vehicle to accomplish God’s mission in the world.</li>
	
					<li><strong>Intentionally Pursue Diversity</strong> We desire to reach all demographics of our 	communities and work purposefully to achieve this goal.</li>
				</ul>
			</div>
		</div>
	</section>

	


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>