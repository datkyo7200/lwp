<?php
get_header();
?>
<div id="primry">
    <div id="main">
        <div class="container">

            <h2>Search results for: <?php echo get_search_query(); ?>
            </h2>

            <?php
                get_search_form();
                while (have_posts()):
                    the_post();
                    get_template_part('template-parts/content', 'search');
                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;
                    
                endwhile;

                the_posts_pagination(
                    array(
                        // 'mid_size'  => 2,
                        'prev_text' => 'Previous',
                        'next_text' => 'Next',
                    )
                );
            ?>

        </div>
    </div>
</div>
<?php
get_footer();
