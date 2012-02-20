<?php get_header(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class='container index'>

        <div id="sidebar">
          <div class='span4'>
            <?php if ( !function_exists('dynamic_sidebar')
                    || !dynamic_sidebar() ) : ?>
             <div class="title">About</div>
             <p>This is my blog.</p>
             <div class="title">Links</div>
             <ul>
              <li><a href="http://example.com">Example</a></li>
             </ul>
            <?php endif; ?>
          </div>
        </div>

        <div class='row'>
          <div class='span12'>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
                <ul class="sharebuttons">
                  <li class='facebook'><a name="fb_share"></a> 
                  <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" 
                          type="text/javascript">
                  </script></li>
                  <li class='twitter'><a href="https://twitter.com/share" class="twitter-share-button" data-via="sproutmobi" data-size="large">Tweet</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
                  <li class='googleplus'><!-- Place this tag where you want the +1 button to render -->
                  <div class="g-plusone"></div></li>
                </ul>

                <p class="byline">
                  <span class="author vcard"><?php the_author_posts_link(); ?></span> <span class="sep">|</span> 
                  <abbr class="published" title="<?php the_time(__('l, F jS, Y, g:i a', 'example')); ?>"><?php the_time(__('F j, Y', 'example')); ?></abbr>
                  <?php edit_post_link(__('Edit', 'example'), ' <span class="sep">|</span> <span class="edit">', '</span> '); ?>
                </p>

                <div class="entry-content">
                  <?php the_content(__('Continue reading', 'example')); ?>
                  <?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
                </div>

                <p class="entry-meta">
                  <span class="categories"><?php _e('Posted in', 'example'); ?> <?php the_category(', '); ?></span>
                  <?php the_tags('<span class="tags"> <span class="sep">|</span> ' . __('Tagged', 'example') . ' ', ', ', '</span>'); ?> 
                  <span class="sep">|</span> <?php comments_popup_link(__('Leave a response', 'example'), __('1 Response', 'example'), __('% Responses', 'example'), 'comments-link', __('Comments closed', 'example')); ?> 
                </p>

              </div>

              <?php endwhile; ?>

            <?php else : ?>

              <p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>

            <?php endif; ?> 
          </div><!-- span12 -->
        </div><!-- row -->

      </div> <!-- /container -->
                    
    </div><!-- #post-<?php the_ID(); ?> --> 
      
<?php get_footer(); ?>