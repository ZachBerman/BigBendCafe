<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="WvISFB-5u1FfY5FDDf_XfpIEqoOIdty7fdo6W3cG4cI" />
    <meta name="msvalidate.01" content="607E5D1AAB1CB1C55A1863475A670E13" />

    <title><?= get_the_title(); ?> | <?= bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--<style type = "text/css">
        <?php if(has_post_thumbnail()): ?>
            #menubg{
                background: url('<?= the_post_thumbnail_url(); ?>') no-repeat center center scroll;
            }
        <?php endif; ?>  
    </style>-->
    
  </head>

  <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="navigation-single" class="navbar navbar-default nav-justified navbar-fixed-top">

      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
          </button>
        </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php /* Primary navigation */
            wp_nav_menu( array(
              'menu' => 'top_menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav nav-justified',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
            );
          ?>
        </div>
      </div>

    </nav>