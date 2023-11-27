        <footer class="footer" role="contentinfo">
            <div class="container">
                <div class="inside-footer">

                    <div class="copyright-cont">
                        <p class="footer__copyright">&copy; <?php echo get_bloginfo('name'); ?> <?php echo date('Y'); ?></p>
                    </div>

                    <div class="nav-cont">
                        <nav class="footer-navigation">
                            <?php wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav-footer']); ?>
                        </nav>
                    </div>

                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        </body>

        </html>