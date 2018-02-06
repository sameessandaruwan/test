<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; 
     charset=<?php bloginfo('charset'); ?>" />	
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
     <!-- leave this for stats please -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="alternate" type="application/rss+xml" title="RSS 2.0" 
     href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="RSS .92" 
     href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Atom 0.3" 
     href="<?php bloginfo('atom_url'); ?>" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

     <?php wp_get_archives('type=monthly&format=link'); ?>
     <?php //comments_popup_script(); // off by default ?>
     <?php wp_head(); ?>
</head>
<body>
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <i class="fa fa-bars" aria-hidden="true"></i> 
          Menu | EN <i class="fa fa-angle-down" aria-hidden="true"></i> 
          </a>
    </div>
    <?php 
$args = array(
  'theme_location' => 'top-menu',
  'container' => 'ul',
  'container_class' => 'nav navbar-nav pull-right',
  'menu_class' =>'nav navbar-nav pull-right'
 );

wp_nav_menu($args);
?>
    
  </div>
</nav>

    



