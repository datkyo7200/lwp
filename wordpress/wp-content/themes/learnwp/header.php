<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-̣9 col-md-7 col-sm-6 col-6">
                        <?php
                        if (is_active_sidebar('social-media')) {
                            dynamic_sidebar('social-media');
                        }
                        ?>
                    </div>
                    <div class="search col-xl-3 col-md-5 col-sm-6 col-6 text-right"><?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand"> <?php the_custom_logo(); ?></a>
                    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="my-nav" class="collapse navbar-collapse main-menu m-auto">
                        <?php wp_nav_menu(array('theme_location'=>'my_main_menu')); ?>
                    </div>
                </nav>
            </div>
    </header>