<?php 
/* 
Template Name: About Us

*/
?>

<?php get_header();?>

<h1><?php the_title() ?>  </h1>

<div class="grid">
<article>I’m a card!</article>
<article><?php get_template_part('includes/section','content') ?></article>

</div>



<?php get_footer(); ?>