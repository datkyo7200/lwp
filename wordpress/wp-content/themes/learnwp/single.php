<?php
get_header();
?>
<div id="primry">
    <div id="main">
        <div class="container">

            <?php
                while (have_posts()):
                    the_post();
                    get_template_part('template-parts/content', 'single');
                    ?>
            <div class="row">
                <div class="pages col-6 text-left">
                    <?php
                        // echo get_next_posts_link();
                        previous_post_link(); ?>
                </div>
                <div class="pages col-6 text-right">
                    <?php
                        // echo get_next_posts_link();
                        next_post_link(); ?>
                </div>
            </div>
            <?php
                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                    
                endwhile;
            ?>

        </div>
    </div>
</div>
<?php
get_footer();
