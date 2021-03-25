<article>
    <h3><?php echo the_title(); ?></h3>
    <?php the_post_thumbnail('medium'); ?>
    <p>Post in <?php echo get_the_date(); ?> by <?php echo the_author_posts_link(); ?></p>
    <p>Categories <?php echo the_category(); ?></p>
    <p><?php the_tags('Tags:', ','); ?></p>
    <p><?php the_content(); ?> </p>
</article>