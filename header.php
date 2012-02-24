<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(''); ?></title>
    <!-- Update your html tag to include the itemscope and itemtype attributes -->
    <html itemscope itemtype="http://schema.org/Product">

    <!-- Add the following three tags inside head -->
    <meta itemprop="name" content="Make a Mobile Website with SproutMobi">
    <meta itemprop="description" content="Make a mobile website with SproutMobi's DIY Mobile Website Builder.">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/wp-content/themes/mobileloft/style.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/wp-content/themes/mobileloft/images/favicon.ico">
    <link rel="apple-touch-icon" href="/wp-content/themes/mobileloft/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/mobileloft/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/mobileloft/images/apple-touch-icon-114x114.png">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>


        <link rel='stylesheet' id='nivoStyleSheet-css'  href='/wp-content/plugins/nivo-slider-light/nivo-slider.css?ver=3.2.1' type='text/css' media='all' />
        <link rel='stylesheet' id='nivoCustomStyleSheet-css'  href='/wp-content/plugins/nivo-slider-light/custom-nivo-slider.css?ver=3.2.1' type='text/css' media='all' />
        <script type='text/javascript' src='/wp-content/plugins/nivo-slider-light/jquery.nivo.slider.pack.js?ver=3.2.1'></script>

        <?php wp_head(); ?>

        <link href="/wp-content/themes/mobileloft/custom.css" rel="stylesheet">

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-15098402-6']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>

  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
        <a id='logo' href='/'>
          <img src='http://www.sproutmobi.com/wp-content/uploads/2012/02/smlogo.png'>
        </a>

        <!--
          <a class="brand" href="/">Mobile Loft</a> 
            <span id='tagline'>
              Build stunning mobile websites
            </span> -->

            <?php if(is_page( 'about' )){
              echo " class='activepage' ";
            }
            ?>

          <ul class="nav secondary-nav">
            <li <?php if(is_page( 'about-sproutmobi' )){
              echo " class='activepage' ";
            }
            ?>><a href="/about/">About</a></li>
            <li <?php if( is_home() || (is_single())){
              echo " class='activepage' ";
            }
            ?>><a href="/blog/">Blog</a></li>
            <li <?php if(is_page( 'features' )) {
              echo " class='activepage' ";
            }
            ?>><a href="/features/">Features</a></li>
            <li <?php if(is_page( 'customers' )){
              echo " class='activepage' ";
            }
            ?>><a href="/customers/">Customers</a></li>
            <li <?php if(is_page( 'pricing-and-plans' )){
              echo " class='activepage' ";
            }
            ?>><a href="/pricing-and-plans/">Pricing</a></li>
            <li <?php if(is_page( 'support' )){
              echo " class='activepage' ";
            }
            ?>><a href="/support/">Support</a></li>
            <li class='navbutton'><a href='/login'>Login</a></li>
          </ul>
        </div>
      </div>
    </div>