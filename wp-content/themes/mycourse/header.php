<!doctype html>
<html <?php language_attributes(); ?>>
<head> 
                
  <title><?php wp_title(); ?></title>
  <!-- <title>Free online tutorials and codes for students and beginners - getwebcodes.in</title> -->

  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta property="og:title" content="" />
  <meta property="og:description" content="" />

  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <meta name="google-site-verification" content="" />
  <meta name="robots" content="noindex, nofollow" />

  <!-- Favicon -->
  <link rel='icon' href='<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png' type='image/x-icon' />
  <meta name="site-icon" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

  <!-- required Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">

  <!-- required CSS -->
  <?php $timestamp = date('timestamp'); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css?ver=<?php echo $timestamp; ?>" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/components.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/utils.css?ver=<?php echo $timestamp; ?>" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css?ver=<?php echo $timestamp; ?>" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css?ver=<?php echo $timestamp; ?>" /> 
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/codemirror.css?ver=<?php echo $timestamp; ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 

<!-- Header Start -->
<header id="main_header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3"> 
          <div class="site_logo with_image">
            <a class="logo_link" href="<?php echo site_url('/'); ?>">
              <img class="logo_image"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/site-logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-12 col-md-9">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo site_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo site_url('/categories'); ?>">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo site_url('/quizzes'); ?>">Quizzes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo site_url('/interview'); ?>">Interview</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="<?php echo site_url('/blog'); ?>">Blog</a>
                </li>
                <li class="nav-item nav-item d-flex justify-content-center align-items-center">
                  <a href="<?php echo site_url('/?s='); ?>" class="search-trigger"><i class="fa fa-search text_primary ml_10" aria-hidden="true"></i></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link btn btn-primary btnui3s" data-toggle="modal" data-target="#basicLoginFromModal" href="#">Login</a>
                  <a class="nav-link btn btn-primary btnui3s" data-toggle="modal" data-target="#basicLoginFromModal" href="#">Post</a>
                </li> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="full-menu bg-dark hide-sm">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
              <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
              </button> -->
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto d-flex">
                  <li class="nav-item"><a class="nav-link text-white" href="#">HTML</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">CSS</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">Bootstrap</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">jQuery</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">JavaScript</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">React JS</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">Angular</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">PHP</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">WordPress</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">Python</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="#">Django</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

</header>  
<!-- Header End -->