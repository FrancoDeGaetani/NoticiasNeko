<?php get_header(); ?>

<main class="container">
  <h2>Bienvenido a Noticias Neko</h2>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post">
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
      </a>
    </article>
  <?php endwhile; else : ?>
    <p>No hay publicaciones todavía.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
