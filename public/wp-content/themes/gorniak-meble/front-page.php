<?php
get_header();

get_template_part('partials/home/home','slider');
get_template_part('partials/home/home','welcome');
get_template_part('partials/home/home','specialization');
get_template_part('partials/home/home-latest','projects');
get_template_part('partials/home/home','service');
get_template_part('partials/home/home','counters');
get_template_part('partials/home/home','partners');

get_footer();