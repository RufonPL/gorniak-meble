<?php
$site_logo = get_field('site_logo', PAGE_HOME)['sizes']['img_180x80'];
$footer_content_col1 = get_field('footer_col1_content', PAGE_HOME);
$footer_content_col2 = get_field('footer_col2_content', PAGE_HOME);
$footer_content_col3 = get_field('footer_col3_content', PAGE_HOME);
$footer_content_col4 = get_field('footer_col4_content', PAGE_HOME);

$footer_header_col2 = get_field('footer_col2_header', PAGE_HOME);
$footer_header_col3 = get_field('footer_col3_header', PAGE_HOME);
$footer_header_col4 = get_field('footer_col4_header', PAGE_HOME);


?>
<footer>
    <div class="container-fluid footer-container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 footer-disclaimer">
                    <img src="<?= $site_logo ?>" alt="">
                    <?= $footer_content_col1 ?>
                </div>
                <div class="col-12 col-md-6 col-lg-3 footer-contact">
                    <h5 class="footer-header">
                        <?= $footer_header_col2 ?>
                    </h5>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'Main Menu',
                        'container_class' => 'footer-menu-container',
                        'menu_class' => 'footer-menu'));
                    ?>
                </div>
                <div class="col-12 col-md-6 col-lg-3 footer-menu">
                    <h5 class="footer-header">
                        <?= $footer_header_col3 ?>
                    </h5>
                    <?= $footer_content_col3 ?>
                </div>
                <div class="col-12 col-md-6 col-lg-3 footer-newsletter">
                    <h5 class="footer-header">
                        <?= $footer_header_col4 ?>
                    </h5>
                    <?= $footer_content_col4 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-lower">
        Tomasz Górniak Design | Wszystkie prawa zastrzeżone | <?= date('Y') ?>
    </div>
</footer>