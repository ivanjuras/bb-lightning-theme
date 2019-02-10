<?php get_header(); ?>

<?php do_action( 'bblt_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('templates/content', 'post'); ?>
    <?php endwhile; ?>
<?php do_action( 'bblt_after_content' ); ?>

<?php get_footer();
