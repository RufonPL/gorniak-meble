<?php
    $site_logo = get_field('site_logo', PAGE_HOME)['sizes']['img_180x80'];
    $contact_phone = get_field('contact_phone', PAGE_HOME);
?>

<header class="top-navbar-container">
    <div class="container-fluid">
        <div class="row align-items-center navbar-main">
            <div class="col-12 col-md-3 navbar-logo">
                <a href="<?= get_site_url() ;?>">
                    <img src="<?= $site_logo ?>" alt="">
                </a>
            </div>
            <div class="col-12 col-md-7 navbar-menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'Main Menu',
                    'container_class' => '',
                    'menu_class' => 'nav justify-content-center'));
                ?>
            </div>
            <div class="col-12 col-md-2 navbar-phone">
                <a href="tel:+48<?= str_replace(' ', '', $contact_phone) ?>">
                    <img src="<?= imgUrl('icon-phone.svg');?>" alt=""><?= $contact_phone ?>
                </a>
            </div>
        </div>
    </div>
</header>