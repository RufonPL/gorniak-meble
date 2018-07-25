<?php
    $site_logo = get_field('site_logo')['sizes']['img_180x80'];
?>

<header class="top-navbar-container">
    <div class="container-fluid">
        <div class="row align-items-center navbar-main">
            <div class="col-12 col-md-3 navbar-logo">
                <img src="<?= $site_logo ?>" alt="">
            </div>
            <div class="col-12 col-md-9 navbar-menu">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>