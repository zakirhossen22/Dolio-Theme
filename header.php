<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Dolio</title>

<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
   
<?php wp_head();?>
</head>

<body class="counter-scroll background-wrap-home4 fixed counter-scroll home4 has-one-page<?php body_class(); ?>">
<?php wp_body_open(); ?>
<div id="loading-overlay">
<div class="loader"></div>
</div>
<div id="mobile-menu-overlay"></div>
<header id="header" class="header header-style4 has-menu-model">
<div class="container">
<div class="flex-header d-flex justify-content-between align-items-center">
<div id="logo" class="logo">
<a href="<?php echo site_url(); ?>" title="Logo"><img src="<?php echo get_field('header_logo','option')?>" alt="images" data-width="122" data-height="34" data-retina="images/logo/02@2x.png"></a>
</div>
<div dir="rtl" class="btn-menu mobile-header__menu-button">
<div class="line line-1"></div>
<div class="line line-2"></div>
<div class="line line-3"></div>
<div class="line line-4"></div>
</div>
<div class="content-menu d-lg-flex">
<div class="nav-wrap">
    <nav id="mainnav" class="mainnav">
        <ul class="menu ace-responsive-menu" data-menu-style="horizontal">
        <?php 
                wp_nav_menu(array(
                'theme_location'=> 'main-menu',


                ));
            ?>
        </ul>
    </nav>
</div>
</div>
<div class="socials-list-hd s3 hv2">
<?php
if(class_exists('ACF')){
    if($header_socials = get_field('header_social','option')){
        foreach($header_socials as $header_social){
            ?>
            
            <a href="<?php echo $header_social['header_social_icon_link']; ?>"><i class="fa <?php echo $header_social['header_social_icon']; ?>" aria-hidden="true"></i></a>
            <?php
     }
    }    
}
?>
</div>
</div>
</div>
</header>
<!-- header -->
