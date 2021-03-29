<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="container">
    <header class="page-header alignwide text-center">
        <h1 class="page-title"><?php esc_html_e('PAGE NOT FOUND'); ?>
        </h1>
        <a href="<?php echo get_home_url(); ?>"
            class="btn btn-primary text-white">Back To
            Home</a>
    </header><!-- .page-header -->

    <div class="error-404 not-found default-max-width py-5">
        <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?'); ?>
            </p>
            <?php get_search_form(); ?>
            <?php the_widget('WP_Widget_Recent_Posts', array(
            'title'=>'Latest Posts',
            'number'=>3));
            ?>
        </div><!-- .page-content -->
    </div><!-- .error-404 -->
</div>

<?php
get_footer();
