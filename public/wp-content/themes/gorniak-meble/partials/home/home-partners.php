<div class="container-fluid partners-container">
    <div class="container">
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