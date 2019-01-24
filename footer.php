<?php wp_footer() ?>
<footer>
    <div class="footer-rh">
        <div class="footer-left">
            <div class="footer-rh-realhome">
                <div class="realhome-logo">
                    <div class="square-top-left"></div>
                    <div class="square-top-right"></div>
                    <div class="realhome"><a href="http://php/www.realhome.com/">
                        <span class="real">REAL<strong>HOME</strong></span></a>
                    </div>
                    <div class="square-bottom-left"></div>
                    <div class="square-bottom-right"></div>
                </div>

                <div class="footer-social">
                    <?php wp_nav_menu(array('theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>
                </div>
            </div>
            <div class="footer-menu">
                <div class="footer-nav">
                    <h3>MENU</h3>
                    <nav><?php wp_nav_menu(array('theme_location' => 'menu-principal', 'container' => 'nav')); ?></nav>
                </div>
            </div>
        </div>
        <div class="footer-right">
            <h3>Contact</h3>
            <p>35 rue des horizons Paris</p>
            <p>Freephone: +1 800 559 6580
            Telephone: +1 959 603 6035
            FAX: +1 800 559 6580</p>
            <a href="info@realhome.com">info@real.com</a>
        
        </div>
    </div>
</footer>
</body>
</html>
