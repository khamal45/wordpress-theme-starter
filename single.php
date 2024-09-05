<?php get_header();?>

<?php if(has_post_thumbnail()): ?>

<?php the_post_thumbnail() ?>
 

<?php endif; ?>


<h1><?php the_title() ?>  </h1>

<?php get_template_part('includes/section','blogcontent') ?>


<?php get_footer(); ?>