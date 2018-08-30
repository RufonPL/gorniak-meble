<?php
$specialization_title = get_field('specialization_title');
$specialization_subtitle = get_field('specialization_subtitle');
$specialization_main_image = get_field('specialization_main_image')['sizes']['img_450x450'];

?>

<div class="container-fluid specialization-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="specialization-header">
                    <?= $specialization_title ?>
                </h2>
                <h3 class="specialization-subheader">
                    <?= $specialization_subtitle ?>
                </h3>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="specialization-mainimage"
                     style="background-image: url(<?= $specialization_main_image ?>);">

                </div>
            </div>
            <div class="col-md-12 col-lg-6 specialization-items">
                <div class="row">
                    <?php if (have_rows('repeater_specialization')):
                    while (have_rows('repeater_specialization')) : the_row();
                        $specialization_box_title = get_sub_field('specialization_box_title');
                        $specialization_box_image = get_sub_field('specialization_box_image')['sizes']['img_60x60'];
                    ?>
                        <div class="col-sm-6 col-md-4 specialization-item">
                            <div class="specialization-item-inner">
                                <img class="specialization-item-image" src="<?= $specialization_box_image ?>" alt="">
                                <h5 class="specialization-item-title">
                                    <?= $specialization_box_title ?>
                                </h5>
                            </div>
                        </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>