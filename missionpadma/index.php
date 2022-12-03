<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Padma</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header part start -->
    <header class="container-fluid">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <?php $qry= new WP_Query([
                'post_type'=>'post',
                'category_name'=>'slide'
            ]); ?>
            <div class="carousel-inner">
                <?php
                $x = 0;
                while ($qry->have_posts()){$qry->the_post();
                $x++;
                ?>
                <div class="carousel-item <?= ($x==1)? 'active':''?> ">
                    <?php the_post_thumbnail(); ?>
                    <img src="#" alt="">
                </div>
                <?php }?>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- logo part start -->

        <!-- logo part end -->

    </header>
    <!-- Header part end -->
   


<?php wp_footer(); ?>
</body>
</html>