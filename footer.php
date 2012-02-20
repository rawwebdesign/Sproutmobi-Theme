
      <div class="fullw darkgrey footer">
        <div class="innercontainer">

          <!-- Example row of columns -->
          <div class="row">
            <div class='span4'>
              <h4>Product</h4>
                Create your own mobile website in a few moments with the Mobile Loft dashboard.  Start your <a href='/sign-up'>risk free 30-day trial</a> in seconds.
              <h4>Company</h4>
                <ul>
                  <li>Mobile Loft</li>
                  <li>118 Graceland Blvd #114</li>
                  <li>Columbus, OH 43214</li>
                  <li>support@mobile-loft.com</li>
                </ul>
              <h4>Support</h4>
                <ul>
                  <li><a href='http://mobile-loft.assistly.com/'>Support Forum</a></li>
                  <li><a href='http://mobile-loft.assistly.com/customer/portal/questions/new'>Ask a Question</a></li>
                  <li><a href='http://mobile-loft.assistly.com/customer/portal/questions/new'>Get Support</a></li>
                  <li><a href='/tos/'>Terms of Service</a></li>
                </ul>
            </div>
            <div class='span8'>
              <h4>Mobile Website Resources:</h4>
              <?php $args = array(
                'depth'        => 0,
                'show_date'    => '',
                'date_format'  => get_option('date_format'),
                'child_of'     => 0,
                'exclude'      => '7,14,31,8,36',
                'include'      => '',
                'title_li'     => __(''),
                'echo'         => 1,
                'authors'      => '',
                'sort_column'  => 'menu_order, post_title',
                'link_before'  => '',
                'link_after'   => '',
                'walker'       => '' ); 

                wp_list_pages( $args );

                ?>
            </div>
            <div class='span4'>
              <h4>Get in Touch</h4>
              <ul class='socialbuttons'>
                <li id='twitter'><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.sproutmobi.com/" data-text="Make a mobile website in 5 minutes with @SproutMobi" data-size="large">Tweet</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
                <li id='googleplus'>
                <!-- Place this tag in your head or just before your close body tag -->
                <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {parsetags: 'explicit'}
</script>

<!-- Place this tag where you want the +1 button to render -->
<div class="g-plusone" data-href="http://www.sproutmobi.com"></div>

<!-- Place this render call where appropriate -->
<script type="text/javascript">gapi.plusone.go();</script></li>
                <li id='facebook'><a name="fb_share"></a> 
<script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" 
        type="text/javascript">
</script></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

            <div id="modal-from-dom" class="modal hide fade">
              <div class="modal-header">
                <a href="#" class="close">&times;</a>
                <h3>Login for Existing Users</h3>
              </div>
              <div class="modal-body">
              <p>Existing users login here:</p>
                <form id="formRegister" name="formRegister" method="post" action="http://srv.mobile-loft.com/register.php">
                  <div class="clearfix">
                    <label for="xlInput">Your Email:</label>
                    <div class="input">
                      <input class="xlarge" size="30" type="text" name="EMailAddress" id="EMailAddress" value="" />
                    </div>
                  </div><!-- /clearfix -->
                  <div class="clearfix">
                    <label for="xlInput">Password:</label>
                    <div class="input">
                      <input class="xlarge" size="30" type="text" name="Password" id="Password" value="" />
                    </div>
                  </div><!-- /clearfix -->
              </div>
              <div class="modal-footer">
                New User?  <a href='/sign-up'>Sign up here</a>.
                <input type="submit" name="Register" class="btn primary" value="Login"></form>
                <a href="/sign-up/" class="btn secondary">Sign-Up</a>
              </div>
            </div>

      <!-- this is the modal box js -->
      <script type='text/javascript' src='/wp-content/themes/mobileloft/js/bootstrap-modal.js'></script>

  <?php wp_footer(); ?>
  </body>
</html>
