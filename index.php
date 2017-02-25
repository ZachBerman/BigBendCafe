<?php get_header(); ?>

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
            <div class="">
              <h2 class="section-heading">About</h2>
              <h3 class="section-subheading">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h3>
            </div>
          </div>
        </div>
        <!-- /.Heading and Subheading --> 
        
        <!-- Border -->
        <div class="">
          <div class="border">
            <div class="row">
              <div class="col-lg-12 text-center">
                <p class="mrgn30-btm"><img alt="border" class="img-responsive center-block" height="26" src="<?= get_template_directory_uri(); ?>/img/border.svg" /></p>
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
      <div id="cta">
        <div class="container"> 
          <!-- Call-To-Action Content Area -->
          <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
              <h2 class="text-uppercase section-heading">Follow us</h3>
              <p><img alt="Contact Us" class=
                        "img-responsive center-block" src=
                        "<?= get_template_directory_uri(); ?>/img/border.svg" /> </p>
              <br>
              <br>
              <h1 class="text-center">-----INSTAGRAM FEED WILL GO HERE-----</h1>
            </div>
          </div>
          <!-- /.Call-To-Action Content Area --> 
        </div>
      </div>
    </section>
    <!-- /.Call-To-Action Section -->

    <!-- Contact Section -->

    <section id="contact">
      <div class="container"> 
        <!-- Contact Heading, Location & Social Connections -->
        
        <div class="row">
          <div class="col-lg-12 text-center mrgn20-btm">
            <div class="">
              <h2 class="text-uppercase section-heading">Contact Us</h2>
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
            <div id="map"><!-- </div> -->
              <script>
                function initMap() {
                  var myLatLng = {lat: 51.301430 , lng: -116.967340};

                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: myLatLng,
                    styles: [{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#C6E2FF"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#C5E3BF"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#D1D1B8"}]}],
                    scrollwheel: false,
                  });

                  var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Hello World!'
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