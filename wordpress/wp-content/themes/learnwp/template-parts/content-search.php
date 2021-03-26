<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <p>Post in <?php echo get_the_date(); ?> by <?php echo the_author_posts_link(); ?></p>
    <p>Categories <?php echo the_category(); ?></p>
    <p><?php the_excerpt(); ?> </p>
</article>