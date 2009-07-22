<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script('jquery'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!--[if IE 6]>
<style type="text/css">
/*<![CDATA[*/
#header{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/content_top.png',sizingMethod='scale'); }
.comm_date{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/date_comm_box.png',sizingMethod='scale'); }
#footer{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_directory'); ?>/images/content_bottom.png',sizingMethod='scale'); }
/*]]>*/
</style>
<![endif]-->
</head>

<body>
<div id="body">
<div id="header">

<?php top_header_image(); ?>

<div id="rss-feed"><a title="<?php _e('Syndicate this site using RSS','lightword'); ?>" href="<?php bloginfo('rss2_url'); ?>"><?php _e('Subscribe via RSS','lightword'); ?></a></div><div class="clear"></div>

<ul id="front_menu">
<?php if(is_front_page()) $selected="s"; ?><li><a class="<?php echo $selected; ?>" title="<?php _e('Home','lightword'); ?>" href="<?php bloginfo('url'); ?>"><span><?php _e('Home','lightword'); ?></span></a></li>
<?php echo wp_list_pages_new();  ?>
</ul>

<div id="header-search"><form method="get" id="searchform" action="<?php bloginfo('url'); ?>"> <input type="text" value="" name="s" id="s" /> <input type="submit" id="go" value="" alt="<?php _e('Search'); ?>" title="<?php _e('Search'); ?>" /></form></div><div class="clear"></div></div>
<div id="content">