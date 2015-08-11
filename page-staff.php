<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php include('page-header.php'); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section id="staff">
		<div class="wrapper">

			<ul class="profiles">
				
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Matthew Bradham</dt>
						<dd>Campus Pastor</dd>
						<dd class="location">Apex</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Micah Brown</dt>
						<dd>Worship Director</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Jenn_Compton-Kid_Point_Director-Apex.jpg" />
					<dl>
						<dt>Jenn Compton</dt>
						<dd>Kid Point Director</dd>
						<dd class="location">Apex</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Jay_Cook-Care_Pastor-Central_and_Cary.jpg" />
					<dl>
						<dt>Jay Cook</dt>
						<dd>Cary Pastor</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Jensen_Davis-Assistant_Care_Director-central_and_raleigh.jpg" />
					<dl>
						<dt>Jensen Davis</dt>
						<dd>Assistant Care Director</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Elise_Drennan-Student_Ministry_Director-Central_and_Raleigh.jpg" />
					<dl>
						<dt>Elise Drennan</dt>
						<dd>Student Ministry Director</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Bill_Finley-Campus_Pastor-Raleigh.jpg" />
					<dl>
						<dt>Bill Finley</dt>
						<dd>Campus Pastor</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Matthew Granger</dt>
						<dd>Worship Director</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Chris_Hankins-Lead_Pastor-Central_and_Cary.jpg" />
					<dl>
						<dt>Chris Hankins</dt>
						<dd>Lead Pastor</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Jeff_Hawkins-Director_of_Finances-Central_and_Cary.jpg" />
					<dl>
						<dt>Jeff Hawkins</dt>
						<dd>Director of Finances</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Jeremy_Hyde-Executive_Pastor-Central_and_Apex.jpg" />
					<dl>
						<dt>Jeremy Hyde</dt>
						<dd>Executive Pastor</dd>
						<dd class="location">Apex</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Mary_Kressin-Office_Administrator-Central_and_Raleigh.jpg" />
					<dl>
						<dt>Mary Kressin</dt>
						<dd>Office Administrator</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>

				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Dani_Langis-Media_Intern-Central_and_Raleigh.jpg" />
					<dl>
						<dt>Dani Langis</dt>
						<dd>Media Intern</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Sam Loveall</dt>
						<dd>Campus Pastor</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Byron_McMillan-Care_Center_Leader-Raleigh.jpg" />
					<dl>
						<dt>Byron McMillon</dt>
						<dd>Care Center Leader</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Juan Mendoza</dt>
						<dd>Assistant Campus Pastor</dd>
						<dd class="location">Español</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/woman-placeholder.jpg" />
					<dl>
						<dt>Chloe Miller</dt>
						<dd>Family Ministry Resident</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/David_Myers-Media_Director-Central_and_Raleigh.jpg" />
					<dl>
						<dt>David Myers</dt>
						<dd>Media Director</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Tracy_OShea-Kid_Point_Director-Cary.jpg" />
					<dl>
						<dt>Tracy O'Shea</dt>
						<dd>Kid Point Director</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/woman-placeholder.jpg" />
					<dl>
						<dt>Ashley Presson</dt>
						<dd>Worship Resident</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>David Rengifo</dt>
						<dd>Worship Director &amp; Executive Director</dd>
						<dd class="location">Español</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Hector Rengifo</dt>
						<dd>Campus Pastor</dd>
						<dd class="location">Español</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/woman-placeholder.jpg" />
					<dl>
						<dt>Ashley Schiess</dt>
						<dd>Family Ministry Resident</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/woman-placeholder.jpg" />
					<dl>
						<dt>Taylor Schiess</dt>
						<dd>Student Ministry Resident</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Wendy_Schulz-Family_Ministry_Director-Central_and_Cary.jpg" />
					<dl>
						<dt>Wendy Schulz</dt>
						<dd>Family Ministry Director</dd>
						<dd class="location">Cary</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Charlie_Soden-Facilities_Manager-Central_and_Apex.jpg" />
					<dl>
						<dt>Charles Soden</dt>
						<dd>Facilities Manager</dd>
						<dd class="location">Apex</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Justin_Tingley-Kid_Point_Director-Raleigh.jpg" />
					<dl>
						<dt>Justin Tingley</dt>
						<dd>Kid Point Director</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/staff/Steve_Vaughn-Creative_Arts_Director-Central.jpg" />
					<dl>
						<dt>Steve Vaughn</dt>
						<dd>Creative Arts Director</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Rob Watson</dt>
						<dd>Worship Pastor</dd>
						<dd class="location">Apex</dd>
					</dl>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/man-placeholder.jpg" />
					<dl>
						<dt>Woody Woodard</dt>
						<dd>Assistant Campus Pastor</dd>
						<dd class="location">Raleigh</dd>
					</dl>
				</li>

			</ul>
			<div class="buttons">
				<a href="<?php echo bloginfo('url'); ?>/about/staff/leadership-team" class="button">Learn more about our Leadership Team</a>
			</div>
		</div>
	</section>
		<?php the_content(); ?>


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>