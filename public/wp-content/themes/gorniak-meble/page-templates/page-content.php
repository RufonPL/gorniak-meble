<?php /* Template Name: Single Content Page */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2><?php the_title();?></h2>
        </div>
        <div class="col-12 single-content-page">
            <?php echo wpautop($post->post_content, true);?>
        </div>
    </div>
</div>


<?php get_footer();