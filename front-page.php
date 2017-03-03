<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

    <style type = "text/css">
        <?php if(has_post_thumbnail()): ?>
            #menubg{
                background: url('<?= the_post_thumbnail_url(); ?>') no-repeat center center scroll;
            }
        <?php endif; ?>  
    </style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjh-JsUKjcqJEHv0bGZSvuEj4LfzzE0K8"></script>
    <style type="text/css">       #map-canvas {           width:    100%;     height:   300px;          }       </style>

    <!-- Header -->
    <header id="homev2">
      <div class="container"> 
        <!-- Intro Section: Logo, Heading & Address -->
        
        <div class="intro-text">
          <div class="">
            <div class="intro-lead-in">
            <h1 class="intro-title"><?php bloginfo( 'name' ); ?></h1>
            </div>
                      <p><img alt="Contact Us" class=
                        "img-responsive center-block hidden-xs animated zoomIn" src=
                        "<?= get_template_directory_uri(); ?>/img/bits/fork-knife.svg"> </p>
                        <p><img alt="Contact Us" class=
                        "img-responsive center-block visible-xs animated zoomIn" src=
                        "<?= get_template_directory_uri(); ?>/img/bits/fork-knife-mobileindex.svg"> </p>

            <div class="intro-heading"><?php bloginfo( 'description' ); ?></div>
          </div>
          <p class="address">528 9th Ave North<br>
            Golden, BC V0A 1H0<br>
            <a href="tel:1-250-344-6111" class="tel header-a"><u>(250) 344-6111</u></a></p>
        </div>
        <!-- /.Intro Section: Logo, Heading & Address --> 
      </div>
      <!-- /.container --> 
    </header>
    <!-- /Header -->

    <!-- About Section -->
    <section id="about">
      <div class="container"> 
        <!-- Heading and Subheading -->
        <div class="row">
          <div class="col-lg-12 text-center">
              <h2 class="section-heading"><?php the_field('home_page_section-1_header'); ?></h2>
              <h3 class="section-subheading"><?php the_field('home_page_section-1_subheader'); ?></h3>
          </div>
        </div>
        <!-- /.Heading and Subheading --> 
        
        <!-- Border -->
        <div class="">
          <div class="border">
            <div class="row">
              <div class="col-lg-12 text-center">
                <p class="mrgn-neg20"><img alt="border" class="img-responsive center-block" height="26" src="<?= get_template_directory_uri(); ?>/img/border.svg" /></p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.Border --> 

        <!-- Description -->
        <div class="">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <p><?php
                if (have_posts()) :
                  while (have_posts()) :
                        the_post();
                        the_content();
                  endwhile;
                endif;?>
              </p>
            </div>
          </div>
        </div>
        <!-- /.Description --> 
      </div>
      <!-- /.container --> 
    </section>
    <!-- /.About Section -->

    <!-- Instagram Section -->
    <section id="instagram">
        <div class="container"> 
          <!-- Call-To-Action Content Area -->
          <div class="row">
            <div class="text-center">
              <h2 class="section-heading"><?php the_field('home_page_section-2_header'); ?></h2>
              <h3 class="section-subheading"><?php the_field('home_page_section-2_subheader'); ?></h3>
              <p><img alt="Contact Us" class=
                        "img-responsive center-block" src=
                        "<?= get_template_directory_uri(); ?>/img/border.svg" /> </p>
             <span class="hidden-xs"><?= do_shortcode("[instashow columns='3']"); ?></span>
             <span class="visible-xs"><?= do_shortcode("[instashow columns='2']"); ?></span>
             <br>
             <br>
             <div class="text-center">
              <a href="https://www.instagram.com/apptesting2212/?ref=badge"><button class="btn btn-primary text-center"><i class="icon-camera-retro"></i> Follow us on Instagram!</button></a>
             </div>
            </div>
          </div>
          <!-- /.Call-To-Action Content Area --> 
        </div>
    </section>
    <!-- /.Call-To-Action Section -->

    <!-- Contact Section -->

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center mrgn20-btm">
            <div class="">
              <h2 class="section-heading"><?php the_field('home_page_section-3_header'); ?></h2>
              <h3 class="section-subheading"><?php the_field('home_page_section-3_subheader'); ?></h3>
              <p><img alt="Contact Us" class=
                        "img-responsive center-block" src=
                        "<?= get_template_directory_uri(); ?>/img/border.svg" /> </p>
              <div class="col-lg-6">
              <p class="text-uppercase mrgn20-btm contact-address"><strong>Hours</strong><br>
              7:30am - 2:00pm <br>
              - Daily -<br>
                Mountain Standard Time!<br>
              </p>
              </div>
              <div class="col-lg-6">
                <p class="text-uppercase mrgn20-btm contact-address">528 9th Ave North<br>
                  Golden, BC V0A 1H0<br>
                  <a href="tel:1-250-344-6111" class="tel"><u>(250) 344-6111</u></a><br>
                  <a href="mailto:Roddy.macisaac@gmail.com"><u>E-mail us</u></a></p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.Contact Heading, Location & Social Connections --> 
      </div>
      <!-- /.container --> 
      
      <!-- Location Map with an Iframe-->
      <div id="iframe">
        <div class="container-fluid">
          <div class="row"> 
            <div id="map-canvas"></div><!-- #map-canvas -->
              <script type="text/javascript">
                google.maps.event.addDomListener( window, 'load', gmaps_results_initialize );
                function gmaps_results_initialize() {

                  if ( null === document.getElementById( 'map-canvas' ) ) {
                    return;
                  }

                  var map, marker;

                  map = new google.maps.Map( document.getElementById( 'map-canvas' ), {

                    zoom:           17,
                    scrollwheel:    false,
                    center:         new google.maps.LatLng( 51.301430, -116.967340 ),

                  });

                  // Marker
                  marker = new google.maps.Marker({  

                    position: new google.maps.LatLng( 51.301430, -116.967340),
                    map:      map

                  });

                }
                </script>
            </div>
          </div>
        </div>
        <!-- /.container-fluid --> 
      </div>
      <!-- /.Location Map with an Iframe -->
      
      <div class="container"> 
        <!-- Border -->
        <div class=""> 
      </div>
      <!-- /.container --> 
    </section>
    <!-- /.Contact Section --> 

  <?php get_footer(); ?>