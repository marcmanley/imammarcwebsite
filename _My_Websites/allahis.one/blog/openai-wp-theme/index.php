<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 1em;
      text-align: center;
    }

    header h1 {
      margin: 0;
    }

    main {
      padding: 1em;
    }

    .entry-title {
      font-size: 1.25em;
      margin: 0 0 1em 0;
    }

    .entry-content {
      margin: 0 0 2em 0;
    }

    .entry-meta {
      font-size: 0.875em;
      font-style: italic;
      margin: 0 0 2em 0;
    }

    .read-more {
      font-size: 0.875em;
      font-style: italic;
    }
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
  <main>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta">
          <?php the_date(); ?> by <?php the_author(); ?>
        </div>
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="read-more">Read more &raquo;</a>
      </article>
    <?php endwhile; endif; ?>
  </main>
  <?php wp_footer(); ?>
</body>
</html>
