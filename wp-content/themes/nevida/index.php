<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo et enim asperiores. Eius, odit? Dignissimos dolores numquam inventore odit? Deleniti molestiae laboriosam inventore quod dolorum fuga nemo exercitationem? Quaerat, asperiores.</p>
    <a href="#" class="card-link"><?php the_permalink() ?></a>
    <a href="#" class="card-link"><?php the_author() ?></a>
  </div>
    <?php endwhile ?>=
<?php else: ?>
    <h1>Aucun article</h1>
<?php endif; ?>

<?php get_footer() ?>