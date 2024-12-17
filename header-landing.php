<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
<!-- Additional Favicon and Icons -->
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="PilihPilih" />
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<?php 
    $header_script = get_field('basic_script', 'option');
    if( $header_script && !empty($header_script['basic_script_header']) ): ?>
        <?php echo $header_script['basic_script_header']; ?>
<?php endif; ?>

</head>

<body <?php body_class(); ?>>




