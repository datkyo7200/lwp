<article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
    </a>
    <a href="<?php the_permalink();  ?>">
        <?php the_post_thumbnail(array(275,275), array( 'class' => 'img-fluid' )); ?>
    </a>
    <p>Post in <?php echo get_the_date(); ?></p>
    <p>Categories <?php echo the_category(); ?></p>
    <p><?php the_tags('Tags:', ','); ?></p>
    <p><?php the_content(); ?> </p>
</article>