<?php
$service_title = get_field('service_title');
$service_subtitle = get_field('service_subtitle');

?>

<div class="container-fluid service-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="service-header">
                    <?= $service_title ?>
                </h3>
                <h4 class="service-subheader">
                    <?= $service_subtitle ?>
                </h4>
            </div>
            <?php if (have_rows('repeater_service')):
                while (have_rows('repeater_service')) : the_row();
                    $service_image = get_sub_field('service_image')['sizes']['img_350x350'];
                    $service_title = get_sub_field('service_title');
                    $service_copy = get_sub_field('service_copy');
                    $service_btn_copy = get_sub_field('service_btn_copy');
                    $service_btn_href = get_sub_field('service_btn_href');
                    ?>
                    <div class="col-12 col-md-4">
                        <div class="service-item">
                            <a class="service-item-image"
                               href="<?= $service_btn_href ?>"
                                 style="background-image: url(<?= $service_image ?>);">

                            </a>
                            <div class="service-item-copy">
                                <h5 class="service-item-header">
                                    <?= $service_title ?>
                                </h5>
                                <p class="service-item-description">
                                    <?= $service_copy ?>
                                </p>
                                <a class="service-item-btn" href="<?= $service_btn_href ?>">
                                    <?= $service_btn_copy ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>