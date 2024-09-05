<?php if(have_posts()): while(have_posts()): the_post(); ?>
<cite>—Posted By <?php echo(get_the_author_meta( 'first_name' )) ?> <?php echo(get_the_author_meta( 'last_name' )) ?></cite>

<?php the_content();  ?>
<?php 
endwhile; else: endif;
?>