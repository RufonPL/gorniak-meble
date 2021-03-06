<div class="container-fluid home-slider-container slick-hero">
    <?php if (have_rows('repeater_hero')):
        while (have_rows('repeater_hero')) : the_row();
            $hero_img = get_sub_field('hero_image')['sizes']['slider'];
            $hero_title = get_sub_field('hero_title');
            $hero_subtitle = get_sub_field('hero_subtitle');
            ?>

            <div class="home-slider-item" style="background-image: url(<?= $hero_img ?>)">
                <div class="home-slider-inner">
                    <div class="home-slider-header">
                        <?= $hero_title ?>
                    </div>
                    <div class="home-slider-subheader">
                        <?= $hero_subtitle ?>
                    </div>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
</div>