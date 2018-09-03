<?php
$partners_title = get_field('partners_title');
$partners_subtitle = get_field('partners_subtitle');
?>


<div class="container-fluid partners-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="partners-header">
                    <?= $partners_title ?>
                </h2>
                <h3 class="partners-subheader">
                    <?= $partners_subtitle ?>
                </h3>
            </div>
        </div>
        <div class="row partners-row">
            <?php if (have_rows('repeater_partners')):
                while (have_rows('repeater_partners')) : the_row();
                    $partners_image = get_sub_field('partners_image')['sizes']['img_200x150'];
                    ?>
                    <div class="col-12 col-md-6 col-lg-3 partners-container-item">
                        <img src="<?= $partners_image ?>" alt="">
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>