<?php get_header() ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title() ?></h1>
    <?php the_post_thumbnail() ?>
    <?php the_content() ?>

    <h2>Articles relatifs</h2>

<?php endwhile; endif; ?>

<?php $query = new Wp_query ([
    'post_not_in' => [get_the_ID()],
    'post_type' => 'post',
    'posts_par_page' => 3,
]); 
while($query->have_posts()): $query->the_post();
?>

<php endwhile; wp_reset_postdata(); ?>

<?php endwhile; endif; ?>

<?php get_footer() ?>