<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
    <p class="card-text">
        <?php the_content('voir plus...') ?>
    </p>
    <a href="<?php the_permalink() ?>"class="card-link">Voir plus</a>
    <p class="card-text"><?php the_author() ?></p>
  </div>
    <?php endwhile ?>
<?php else: ?>
    <h1>Aucun article</h1>
<?php endif; ?>

<?php get_footer() ?>
