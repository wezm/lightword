<div class="clear"></div>
</div>
<div id="footer">
<span class="text">
<?php
$blog_name = '<a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
printf(__('Copyright %s %s %s &middot; Powered by %s / %s developed by %s for you.', 'lightword'),'&copy;',date('Y'),$blog_name,'<a href="http://www.wordpress.org" title="Wordpress">Wordpress</a>','<a title="Wordpress Themes" href="http://students.info.uaic.ro/~andrei.luca/blog/lightword-theme">LightWord Theme</a>','<a title="Andrei Luca" href="http://students.info.uaic.ro/~andrei.luca/">Andrei Luca</a>');
?>
</span>
<a title="<?php _e('Go to top','lightword'); ?>" class="top" href="#top"><?php _e('Go to top','lightword'); ?> &uarr;</a>
</div>

<?php wp_footer(); ?>
</body>
</html>