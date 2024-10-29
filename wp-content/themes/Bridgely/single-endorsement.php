<?php get_header(); ?>




<main id="content" class="default-page-template">

    <div class="blank-intro-hero" id="general-intro-hero"
        style="background:url('https://bridgely.org/wp-content/uploads/2022/02/home-hero-bg.jpg') no-repeat center top; background-size:cover;">
        <div class="up-curve-contain">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF"></path>
            </svg>
        </div>
    </div>

    <div class="main-page-template-content page-animate-block" id="changing">
        <div class="default-page-template-content">
            <div class="center">

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <?php /* Page Title */ ?>
                <div class="default-animate-title">
                    <div class="center">
                        <div class="intro-copy-wrap">
                            <h1 class="special blue left"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>

                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>
                <div class="col2 center" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    <div style="padding:20px 0;"><?php the_content(); ?></p>
                    <cite><?php the_title(); ?><br><?php the_field('title'); ?><br><?php the_field('organization'); ?><br><?php the_field('country'); ?></cite>
                </div>
            </div>


            <?php endwhile; endif; ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>