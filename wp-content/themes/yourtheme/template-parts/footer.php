<div class="container text-center">
    <div class="d-lg-flex">
        <div class="w-100 col-lg-4 align-items-center">
            <div >
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" class="logo mx-auto" alt="Jaron Gama Real Estate Specialist">
                <ul class="social-row">
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-facebook-f "></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-twitter "></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-linkedin "></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="fab fa-youtube "></i>
                    </a>
                </li>
            </ul>
            </div>
        </div>
        <div class="w-100 col-lg-5 info text-lg-left">
            <h3>
                <a href="mailto:hello@realestate.com">hello@realestate.com</a>
            </h3>
            <h3>
                Real Estate/Broker Lic. #123456789
            </h3>
            <h3>
                Office Address, City State, Country Zip Code
            </h3>
            <h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est sit amet facilisis magna etiam. Quis varius quam quisque id diam vel quam. Sit
            </h3>
        </div>
        <div class="w-100 col-lg-3 sitemap text-lg-left">
            <h3>sitemap</h3>
            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'fallback_cb' => 'false')); ?>
        </div>
    </div>
</div>