<?php get_header(); ?>
<br><br><br>

<?php

while(have_posts()) {
    the_post();
    ?>
    <h3><?php the_title();?></h3>
    Posted by <?php the_author();?>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_id())?>" alt="">
    <?php 
    the_content();
    comment_form();?>
    <?php
    
}

?>

<?php get_footer(); ?>