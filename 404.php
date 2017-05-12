<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <style type = "text/css">
        <?php if(has_post_thumbnail()): ?>
            #menubg{
                background: url('<?= the_post_thumbnail_url(); ?>');
            }
        <?php endif; ?>  
    </style>

<!-- Header Small -->
<header id="menubg">
  <div class="container">  
    <!-- Intro Section: Logo and Heading -->
    <div class="intro-text-sm">
      <div class="intro-lead-in"> 
        <h1 class="intro-title">Big Bend Cafe</h1>
          <p><img alt="Contact Us" class=
          "img-responsive center-block hidden-xs animated zoomIn" src=
          "<?= get_template_directory_uri(); ?>/img/bits/fork-knife-mobileindex.svg"> </p>
          <p><img alt="Contact Us" class=
          "img-responsive center-block visible-xs animated zoomIn" src=
          "<?= get_template_directory_uri(); ?>/img/bits/fork-knife-mobile.svg"> </p>
        <div class="intro-heading"> All Day Breakfast </div>
      </div>
    </div>
    <!-- /.Intro Section: Logo and Heading --> 
  </div>
  <!-- /.container --> 
</header>
<!-- /.Header Small -->

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <section class="error-404 not-found">
        <div class="page-content text-center">
          <h1><?php _e( 'Oops, no hot sauce here' ); ?></h1>


        </div><!-- .page-content -->
      </section><!-- .error-404 -->

    </main><!-- .site-main -->
  </div><!-- .content-area -->
