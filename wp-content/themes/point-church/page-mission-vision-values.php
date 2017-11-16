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
				<p>Plant 30 Point Churches in the Triangle by 2025 to point every man, woman, and child here to Jesus in our generation!</p> 

                   <p>We believe every town, community and urban area across the Triangle would be better off with a thriving Point Church actively pointing people to Jesus.  We also believe every person  can play a part in turning this God sized vision into a reality.  We invite you to partner with God to bless the community He has placed you in and partner with what he's doing in the next town or community.  Consider this your invitation to join with us in pointing every man, woman, and child in the Triangle to Jesus in our generation!</p>
			</div>
			<div class="values">
				<h3>Our Values</h3>
				<ul class="styled-list">
					<li><strong>We Are Made To Worship</strong> God created us to worship and we experience maximum joy when we worship him with all we are.</li>
                    
					<li><strong>We Are Better Together</strong> We were created to do life with others, so we are more effective when we follow Jesus together.</li>
                    
					<li><strong>We Are Here To Help</strong> Jesus gives every Christian spiritual gifts and places us here to help others.</li>
                    
					<li><strong>We Will Grow Daily</strong> We grow spiritually when we are connected with God so we prioritize daily time with Him.</li>
                    
					<li><strong>We Will Lead The Way</strong> We have a mission to point people to Jesus, so we lead others to take their next step with Him.</li>
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