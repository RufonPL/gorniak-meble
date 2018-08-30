<?php
$ourprojects_title = get_field('ourprojects_title');
$ourprojects_items = get_posts(array(
    'post_type' => 'realization',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'numberposts' => 6
));
?>

<div class="container latest-projects-container">
    <div class="row">
        <div class="col-12">
            <h2 class="latest-projects-header">
                <?= $ourprojects_title ?>
            </h2>
        </div>

        <?php
        $i = 0;

        if (!empty($ourprojects_items)):
            foreach ($ourprojects_items as $realization):
                $ourprojects_header = get_the_title($realization->ID);
                $ourprojects_image = get_the_post_thumbnail_url($realization->ID, 'img_350x350'); // size
                $ourprojects_exceprt = get_field('realization_excerpt', $realization->ID);
                $ourprojects_link = get_permalink($realization->ID);
                ?>

                <?php if ($i % 2 === 0): ?>
                    <div class="col-12 col-sm-6 col-md-4 latest-projects-column">
                <?php endif; ?>

                <div class="latest-projects-item" style="background-image: url(<?= $ourprojects_image ?>);">
                    <div class="latest-projects-item-content">
                        <h2 class="latest-projects-item-title">
                            <?= $ourprojects_header ?>
                        </h2>
                        <p class="latest-projects-item-copy">
                            <?= $ourprojects_exceprt ?>
                        </p>
                        <?php if ($ourprojects_link): ?>
                            <a class="latest-projects-item-btn"
                               href="<?= $ourprojects_link ?>">
                                Dowiedz się więcej
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($i % 2 !== 0): ?>
                    </div>
                <?php endif; ?>


                <?php $i++;
            endforeach;
        endif; ?>
    </div>
</div>