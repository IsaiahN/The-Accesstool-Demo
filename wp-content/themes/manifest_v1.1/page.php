<div id="standard_bar">
<ul>
<li id="blvd_logo"><a href="http://www.blvd-media.com/"><img src="http://tokenraffle.com/dann/logo.png" width="151" height="80" alt="Blvd Media Group Website"></a></li>
<li id="more_left"><a href="http://www.blvd-media.com/">Sign Up For the accessTool®</a></li>
<li><ul id="bar_right">      <li><a href="http://tokenraffle.com/dann/">Home</a></li><?php wp_list_pages('title_li=&depth=1'); ?></ul></li>
</ul>
</div>
<?php get_header(); ?>

<div id="coreContent">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post hentry single" id="post-<?php the_ID(); ?>">
      <div class="postContent">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <div class="entry-content">
  				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
        </div>
      </div>
   </div>

 	

	<?php endwhile; endif; ?>

	


</div>



<?php get_footer(); ?>
