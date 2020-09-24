<?php 
/**
 * Template Name : Page avec banière
 * Template Post Type: page, post
 */
?>

<?php get_header() ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <p>Baniere wp</p>
    <h1><?php the_title() ?></h1>
    <?php the_post_thumbnail() ?>
    <?php the_content() ?>
<?php endwhile; endif; ?>

<?php get_footer() ?>