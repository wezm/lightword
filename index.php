<?php get_header(); ?>
<div id="content-body">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php if (function_exists("post_class")) post_class(); else print 'class="post"'; ?> id="post-<?php the_ID(); ?>">
<div class="comm_date"><span class="data"><span class="j"><?php the_time('j'); ?></span><?php the_time('M/y'); ?></span><span class="nr_comm"><?php if(function_exists('dsq_is_installed')) { echo '<a class="nr_comm_spot" href="'; echo the_permalink(); echo '">N/A</a>';  }else{ ?><a class="nr_comm_spot" href="<?php the_permalink(); ?>#comments"><?php echo fb_get_comment_type_count('comment'); ?></a><?php } ?></span></div>
<h2><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php the_content(''); ?>

<div class="cat_tags clear">
<span class="category"><?php if($lw_disable_tags == "true" || !get_the_tags()) { _e('Filed under:','lightword'); echo " "; the_category(', ');} else if (get_the_tags() && $lw_disable_tags == "false") { _e('Tagged as:','lightword'); echo " "; the_tags(''); } ?></span>
<span class="continue"><?php $pos = strpos($post->post_content, '<!--more-->'); if($pos==''){ ?><a class="nr_comm_spot" href="<?php the_permalink(); ?>#comments"><?php if(fb_get_comment_type_count('comment')==1) _e('1 Comment','lightword'); elseif('open' != $post->comment_status) _e('Comments Off','lightword'); elseif(fb_get_comment_type_count('comment')==0) _e('No Comments','lightword'); else echo fb_get_comment_type_count('comment')." ".__('Comments','lightword'); ?></a><?php }else{ ?><a title="<?php _e('Read more about','lightword'); ?> <?php the_title(); ?>" href="<?php the_permalink() ?>#more-<?php echo $id; ?>"><?php _e('Continue reading','lightword'); ?></a><?php } ?></span><div class="clear"></div>
</div>
<div class="cat_tags_close"></div>

<?php wp_link_pages('before=<div class="nav_link">&after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>
</div>

<?php comments_template(); ?>

<?php endwhile; else: ?>

<h2><?php _e('Not Found','lightword'); ?></h2>
<p><?php  _e("Sorry, but you are looking for something that isn't here.","lightword"); ?></p>

<?php endif; ?>

<div class="newer_older">
<span class="newer"><?php previous_posts_link(__('&laquo; Newer Entries','lightword')) ?></span>
<span class="older"><?php next_posts_link(__('Older Entries &raquo;','lightword')) ?></span>
</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>