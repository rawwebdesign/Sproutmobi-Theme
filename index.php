<?php get_header(); ?>

  <?php while ( have_posts() ) : the_post() ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- Main hero unit for a primary marketing message or call to action
          <div class="green-hero">
            <div id='topline'>The <span class='special'>All-In-One</span> System for Creating <span class='special'>Simply Awesome</span></div>
            <div id='bottomline'>Mobile Websites</div>
          </div>
          -->
        
        <!--
        <div class='fullwidth greybg'>
              <p>Try us out FREE for 30 Days <a class="btn primary large">Get Started</a> or <a class="btn large">Take the Tour</a></p>
        </div>
        -->

        <!--
        <div class="fullw lightgrey">
          <div class="innercontainer">

            <div class="row">
              <div class="span-one-third">
                <h2>Faster</h2>
                <p>Your mobile website can be up-and-running in 5 minutes flat.  And once your website is done, it is blazing fast to load and view on mobile phones.</p>
                <p><a class="btn" href="#">Start Building &raquo;</a></p>
              </div>
              <div class="span-one-third">
                <h2>Easier</h2>
                 <p>Not a computer whiz?  You don't need to be a web designer to use our simple dashboard to create the mobile site your customers are begging for.  It's as simple as pointing and clicking.</p>
                <p><a class="btn" href="#">See How Easy &raquo;</a></p>
             </div>
              <div class="span-one-third">
                <h2>Customized</h2>
                <p>Looking for the perfect mobile package?  Whether you are a business, blog, newspaper, family, or anything in between, there is the perfect package for you.</p>
                <p><a class="btn" href="#">View Pricing &raquo;</a></p>
              </div>
            </div>
          </div>
        </div>
        -->
      
      <div class='container'>

      <div class='row'>
        <div class='span16'>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
   
          <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
          </div><!-- .entry-content -->
        </div>
      </div>

      </div> <!-- /container -->
                    
    </div><!-- #post-<?php the_ID(); ?> --> 
   
  <?php endwhile; ?>
      
<?php get_footer(); ?>