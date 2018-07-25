<?php
$ourprojects_title = get_field('ourprojects_title');
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
        if (have_rows('repeater_ourprojects')):
            while (have_rows('repeater_ourprojects')) : the_row();
                $ourprojects_header = get_sub_field('ourprojects_header');
                $ourprojects_image = get_sub_field('ourprojects_image')['sizes']['img_350x350']; // size
                $ourprojects_copy = get_sub_field('ourprojects_copy');
                $ourprojects_link = get_sub_field('ourprojects_link');
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
                            <?= $ourprojects_copy ?>
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


                <?php $i++; ?>
            <?php endwhile;
        endif; ?>
    </div>
</div>