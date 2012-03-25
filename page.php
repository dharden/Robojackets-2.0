<?php get_header(); ?>

				<div id="nav">
<div id="menuh-container">
<div id="menuh">

	<ul>	
		<li><a href=".">Home</a>
	</ul>
	<ul>	
		<li><a href="<?php echo get_permalink(2); ?>">About</a>
	</ul>
	<ul>	
		<li><a href="<?php echo get_permalink(17); ?>">Sponsors</a>
	</ul>
	<ul>
		<li><a href="<?php echo get_permalink(3); ?>" class="top_parent">Teams</a>
		<ul>
			<li><a href="<?php echo get_permalink(4); ?>">FIRST</a></li>
			<li><a href="<?php echo get_permalink(7); ?>">IGVC</a></li>
			<li><a href="<?php echo get_permalink(6); ?>">BattleBots</a></li>
			<li><a href="<?php echo get_permalink(5); ?>">RoboCup</a></li>
		</ul>
		</li>
	</ul>

	<ul>
		<li><a href="<?php echo get_permalink(8); ?>" class="top_parent">Projects</a>
		<ul>
			<li><a href="<?php echo get_permalink(45); ?>">Downhill Car</a></li>
			<li><a href="<?php echo get_permalink(9); ?>">IK Arm</a></li>
			<li><a href="<?php echo get_permalink(10); ?>">Hexapod</a></li>
		</ul>
		</li>
	</ul>
	
	<ul>	
		<li><a href="<?php echo get_permalink(41); ?>">Get Involved!</a>
	</ul>
		
	<ul>	
		<li><a href="<?php echo get_permalink(373); ?>">Outreach</a>
	</ul>

	<ul>	
		<li><a href="<?php echo get_permalink(19); ?>">Contact Us</a>
	</ul>

	<ul>
		<li><a href="#" class="top_parent">Resources</a>
		<ul>
			<li><a href="<?php echo get_permalink(20); ?>">Links</a></li>
			<li><a href="http://wiki.robojackets.org/">RJ Wiki</a></li>
			<li><a href="http://www.robojackets.org/gallery/">Gallery</a></li>
			<li><a href="http://websvn.robojackets.org/">Subversion</a></li>
			<li><a href="https://lists.gatech.edu/sympa/info/robojackets-general">Mailing List</a></li>
		</ul>
		</li>
	</ul>
	
</div> 	<!-- end the menuh-container div -->  
</div>	<!-- end the menuh div --> 

</div>
		<div id="container">
			<div class="content">
				<div id="money">
					<div id="leftbar">
					<div id="questions">
						<a href="<?php echo get_permalink(2); ?>"><div id="who"><h2>WHO ARE THE ROBOJACKETS?</h2></div></a>
						<a href="<?php echo get_permalink(41); ?>"><div id="how"><h2>HOW DO I JOIN?</h2></div></a>
					</div>
<div id="events">
<?php if (function_exists('dynamic_sidebar'))
       dynamic_sidebar();
?>
</div>
					</div>
					<div id="posts">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div class="icon"><?php if (function_exists('get_cat_icon')) get_cat_icon(); ?></div>
							<h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2><?php edit_post_link(__('Edit This')); ?>
							<div class="storycontent">
								<?php the_content(__('(more...)')); ?>
							</div>
</div>

<div style="clear: both;"></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>

			</div>
<?php get_sidebar(); ?>
				</div>
				<div id="footer">&copy;2011 RoboJackets</div>
			</div>
		</div>
	</body>
</html>
