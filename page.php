<?php get_header(); ?>

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

<!-- Menu Section -->
<section id="menuv2">
  <div class="container"> 
    <!-- Heading and Subheading -->
    
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="">
          <h2 class="section-heading"><?php the_title( '' ); ?></h2>
          <h3 class="section-subheading"><?php the_field('subheading'); ?></h3>
        </div>
      </div>
    </div>
    <!-- /.Heading and Subheading --> 
    <!-- Border -->
    <div class="">
      <div class="border">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="mrgn30-btm"><img alt="border" class="img-responsive center-block" height="26" src="<?= get_template_directory_uri(); ?>/img/border.svg"</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /.Border --> 
    
    <!-- Description -->
    <div class="">
      <div class="row no-gutter">
        <div class="col-lg-12 mrgn20-btm"> 
          
          <!-- Menu Content -->
          <div class="row">
            <div class="col-lg-12 "> 
            <p><?php
                if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                  endwhile;
                endif;
                ?>
            </p>
          </div>
        </div>
        <!-- Careers Content --> 
        
        </div>
      </div>
    </div>

  </div>
  <!-- /.container --> 
</section>
<!-- /.Menu Section --> 

<?php wp_footer(); ?>