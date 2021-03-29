<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?>
        </h2>
    </a>
    <?php get_post_format(); ?>
    <a href="<?php the_permalink();  ?>">
        <?php the_post_thumbnail(array(275,275), array( 'class' => 'img-fluid' )); ?>
    </a>
    <p>Post in <?php echo get_the_date(); ?> by <?php echo the_author_posts_link(); ?>
    </p>
    <p><?php the_tags('Tags:', ','); ?>
    </p>
    <p><?php the_excerpt(); ?>
    </p>
</article>