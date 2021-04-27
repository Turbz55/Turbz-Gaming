 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Computer
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header">
	<div class="header-inner">
      <div class="logo">
           <?php computer_the_custom_logo(); ?>
			    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
					<?php $description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
						<p><?php echo esc_attr($description); ?></p>
					<?php endif; ?>
      </div><!-- logo -->      
      
     <?php if(get_theme_mod('time') != '' || get_theme_mod('phone') != '') { ?>              
    <div class="header_right"> 
        
            <div class="call-number">
            	<div class="bx-icon"><i class="fa fa-phone"></i></div> <h3><?php echo esc_attr(get_theme_mod('phone')); ?></h3>
            </div><!-- call-number -->
            <div class="call-us">
            	<div class="bx-icon"><i class="fa fa-clock-o"></i></div> <h3><?php echo esc_attr(get_theme_mod('time')); ?></h3>
            </div><!-- call-us --><div class="clear"></div>
    </div><!--header_right-->  
    <?php } ?>  
 <div class="clear"></div>
</div><!-- .header-inner-->
</div><!-- .header -->

<div class="prime-menu">
	<div class="prime-inner">
        <div class="toggle">
                <a class="toggleMenu" href="#">
                    <?php esc_attr_e('Menu','computer'); ?>                
                </a>
         </div><!-- toggle -->    
        <div class="sitenav">                   
            <?php wp_nav_menu( array('theme_location' => 'primary') ); ?> 
        </div><!--.sitenav -->
        <div class="clear"></div>
      </div><!-- prime-inner -->
</div><!-- prime-menu -->