<?php
$welcome_title = get_field('welcome_title');
$welcome_subtitle = get_field('welcome_subtitle');
$welcome_copy = get_field('welcome_copy');
$welcome_image = get_field('welcome_image')['sizes']['img_550x400'];
?>


<div class="container welcome-container">
    <div class="row">
        <div class="col-12 col-md-7 welcome-content">
            <h3 class="welcome-content-header">
                <?= $welcome_title ?>
            </h3>
            <h4 class="welcome-content-subheader">
                <?= $welcome_subtitle ?>
            </h4>
            <p class="welcome-content-copy">
                <?= $welcome_copy ?>
            </p>
            <div class="row">
                <?php if (have_rows('repeater_welcome_boxes')):
                    while (have_rows('repeater_welcome_boxes')) : the_row();
                        $welcome__boxes_counter = get_sub_field('welcome_boxes_counter');
                        $welcome_boxes_title = get_sub_field('welcome_boxes_title');
                        ?>
                        <div class="col-6 col-md-4 welcome-content-item">
                            <p class="welcome-content-counter">
                                <?= $welcome__boxes_counter ?>
                            </p>
                            <p class="welcome-content-title">
                                <?= $welcome_boxes_title ?>
                            </p>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
        <div class="col-12 col-md-6 welcome-image">
            <div class="welcome-image-box" style="background-image: url(<?= $welcome_image ?>)">

            </div>
        </div>
    </div>
</div>