<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </title>
    <?php wp_head(); ?>
    <?php
    // showArray($data){
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    // }
    // phpinfo();
    ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-̣9 col-md-7 col-sm-6 col-6">Social Icons</div>
                    <div class="search col-xl-3 col-md-5 col-sm-6 col-6 text-right"><?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="align">
                    <div class="row">
                        <section class="logo col-md-2 col-sm-12 col-12 text-center">
                            Logo
                        </section>
                        <nav class="main-menu col-md-10 text-right">
                            <?php wp_nav_menu(array('theme_location'=>'my_main_menu')); ?>
                        </nav>
                    </div>
                </div>
            </div>
    </header>