<?php /* Template Name: Page Contact */

get_header(); ?>

    <div class="container contact-container">
        <div class="row">
            <div class="col-12">
                <h2><?php the_title();?></h2>
            </div>
            <div class="col-12 single-content-page">
                <?php echo wpautop($post->post_content, true);?>
            </div>
            <div class="contact-form">

            </div>
        </div>
    </div>


<?php get_footer();