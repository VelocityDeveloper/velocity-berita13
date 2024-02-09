</div>
</div>

<footer class="site-footer" id="colophon">
    <div class="container">
        <?php get_berita_iklan('iklan_footer'); ?>
        <?php echo '<div class="row m-0 bg-light pt-4 pb-3 px-1 border-top footer-widget">';
            for ($x = 1; $x <= 4; $x++) {
                if (is_active_sidebar('footer-widget-'.$x)) {
                    echo '<div class="col-md col-12 footer-widget-'.$x.'" >';
                        dynamic_sidebar('footer-widget-'.$x);
                    echo '</div>';
                }
            }
        echo '</div>'; ?>
        <div class="site-info text-center bg-dark text-white py-3">
            <small>© <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All Rights Reserved. Design by <a class="text-white" href="https://velocitydeveloper.com/" target="_blank" rel="noopener noreferrer"> Velocity Developer</a>.</small>
        </div>
    </div>
</footer>