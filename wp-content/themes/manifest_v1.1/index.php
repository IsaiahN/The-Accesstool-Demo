<div id="standard_bar">
<ul>
<li id="blvd_logo"><a href="http://www.blvd-media.com/"><img src="http://tokenraffle.com/dann/logo.png" width="151" height="80" alt="Blvd Media Group Website"></a></li>
<li id="more_left"><a href="http://www.blvd-media.com/">Sign Up For the accessTool®</a></li>
<li><ul id="bar_right">      <li><a href="http://tokenraffle.com/dann/">Home</a></li><?php wp_list_pages('title_li=&depth=1'); ?></ul></li>
</ul>
</div>
<?php get_header(); ?>

    <div id="coreContent" class="hfeed">
      
    	<?php if (have_posts()) : ?>
    
    		<?php while (have_posts()) : the_post(); ?>

      <div class="post hentry">
<h5 class="postDate"><abbr class="published"> <b>What Is the accessTool® ?</b></abbr></h5>        
<div class="postContent">
          <h3 class="entry-title"></h3>
         
          
          <div class="entry-content">
				
            <p><br /> <img src="http://www.tokenraffle.com/dann/attool.png" alt="accesstool"/></p>
			<h2>Over 500 Offers In a Convenient Tool!</h2>
			<p>Have you ever wanted to earn money from your personal website or blog?
			There are many ways to do it, but most of these options are either too hard to install, customize, or earn money with.
			We believe that hard work should never go unrewarded. That is where the accessTool® comes in.
			Earn the money that you deserve from the effort that it took to make your website.
			The accessTool® is one of the easiest ways to do that.</p>	
          </div>
        </div>
        <div class="postMeta">
        

        </div>
<h5 class="postDate"><abbr class="published"> <b>How does it work ?</b></abbr></h5>        
<div class="postContent">
          <h3 class="entry-title"></h3>
         
          
          <div class="entry-content">
	<p> The accessTool® requires visitors to compensate you for viewing or downloading the content on your website. 
		It provides users with 3 unique ways to make you money!
		In order to access your content, visitors either have to 1) Fill out a survey, 2) Make a PayPal donation, or 3) Opt-In to your newsletter.
		The accessTool® is completely customizable in the way it looks and performs.
		New surveys are added every day.
		All display options are customizable within your Blvd Media publisher panel.
	</p>

          </div>
        </div>
        <div class="postMeta">
        

        </div>
<h5 class="postDate"><abbr class="published"> <b>accessTool® Applications</b></abbr></h5>        
<div class="postContent">
          <h3 class="entry-title"></h3>
         
          
          <div class="entry-content">
			
			<h3>Here are a few applications for the accessTool® </h3>
			<ul id="blvd_apps">
			<h4>Video Sites</h4>
			<li>View TV shows, movies, music videos, informational videos or any other type of video content</li>
			<h4>Music Downloads</h4>
			<li>Access MP3 or streaming audio</li>
			<h4>E-Book Downloads</h4>
			<li>Easy access to read books online or download</li>
			<h4>MMORPGs and Social Games</h4>
			<li>Access to special items or premium in-game content</li>
			<h4>Membership Sites</h4>
			<li>Temporarily unlock premium services or unlock 3-day membership codes</li>
			<h4>Blogs / Vlogs</h4>
			<li>Access exclusive content or a higher quality stream</li>
			<h4>Software Downloads</h4>
			<li>Make a donation or allow the download of premium software</li>
			<h4>Websites Script Downloads</h4>
			<li>Obtain access to premium scripts or templates</li>
			<h4>Cheat Code Sites</h4>
			<li>Unlock special cheat code for video game sites</li>
			<h4>File Downloads</h4>
			<li>Access faster speeds, exclusive files or a registry key</li>
			</ul> 	
			<p>As you can see, there are many websites that the accessTool® can help to monetize!</p>
          </div>
        </div>
        <div class="postMeta">
        

        </div>
<h5 class="postDate"><abbr class="published"> <b>Installation Process</b></abbr></h5>        
<div class="postContent">
          <h3 class="entry-title"></h3>
         
          
          <div class="entry-content">
	<p>	Within 10 Minutes you can have a customized accessTool® that matches your site and makes visitors want to earn money for you!
		accessTool® can be used on virtually all websites and via CMS systems such as Joomla, Drupal, and <a href="#">Wordpress.</a> 
	</p>
     

          </div>
        </div>
        <div class="postMeta">
        

        </div>
<h5 class="postDate"><abbr class="published"> <b>More Information</b></abbr></h5>        
<div class="postContent">
          <h3 class="entry-title"></h3>
         
          
          <div class="entry-content">
	<p> The accessTool® is a widget that is able to revolutionize the incentive market one website at a time.
		Never has there been a more advanced tool that was easier to use! 
		To learn more about the accessTool® here: <a href="http://www.blvd-media.com">Blvd Media Group</a> 
	</p>

          </div>
        </div>
        <div class="postMeta">
        

        </div>
      </div>

		<?php endwhile; ?>

    <div class="pageNav">
      <div class="prev"><?php next_posts_link('&laquo; Older') ?></div>
      <div class="next"><?php previous_posts_link('Newer &raquo;') ?></div>
    </div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.
                 </p>


	<?php endif; ?>

  </div>


<?php get_footer(); ?>
