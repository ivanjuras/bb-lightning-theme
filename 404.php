<?php get_header(); ?>

<?php do_action( 'bblt_before_content' ); ?>
<?php the_content(); ?>
<?php do_action( 'bblt_after_content' ); ?>

<?php get_footer();
