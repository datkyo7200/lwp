<footer id="" class="py-5 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                Copyright 2021 - Learn WP
            </div>
            <div class="col-md-7">
                <nav class="footer-menu text-right">
                    <?php wp_nav_menu(array('theme_location' => 'footer_menu' )); ?>
                </nav>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>