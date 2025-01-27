<?php get_header(); ?>

<div class="category-tile-container">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
    <div class="category-tile-item">
      <a href="<?php the_permalink(); ?>" class="category-tile-link">
        <?php if (has_post_thumbnail()) : ?>
          <div class="category-tile-thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
        <h2 class="category-tile-title"><?php the_title(); ?></h2>
      </a>
    </div>
  <?php endwhile; ?>
  <?php else : ?>
    <p>該当する投稿はありません。</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
