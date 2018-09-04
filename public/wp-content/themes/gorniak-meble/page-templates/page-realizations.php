<?php /* Template Name: All Realizations Page */

get_header();

$realization_title = get_field('ourprojects_title', PAGE_HOME);
$realisations = get_posts(array(
    'post_type' => 'realization',
    'post_status' => 'publish',
    'numberposts' => -1
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

            if (!empty($realisations)):
                foreach ($realisations as $realization):
                    $realisation_header = get_the_title($realization->ID);
                    $realisation_image = get_the_post_thumbnail_url($realization->ID, 'img_350x350'); // size
                    $realisation_exceprt = get_field('realization_excerpt', $realization->ID);
                    $realisation_link = get_permalink($realization->ID);
                    ?>

                    <div class="col-12 col-md-4 latest-projects-item latest-projects-list-item" style="background-image: url(<?= $realisation_image ?>);">
                        <div class="latest-projects-item-content latest-projects-list-item-content">
                            <h2 class="latest-projects-item-title">
                                <?= $realisation_header ?>
                            </h2>
                            <p class="latest-projects-item-copy">
                                <?= $realisation_exceprt ?>
                            </p>
                            <?php if ($realisation_link): ?>
                                <a class="latest-projects-item-btn"
                                   href="<?= $realisation_link ?>">
                                    Dowiedz się więcej
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>


<?php get_footer();?>