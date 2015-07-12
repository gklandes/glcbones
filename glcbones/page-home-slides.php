<?php
/*
 Template Name: Slides Home
*/
?>
<?php get_header(); ?>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <?php $slide_query = new WP_Query( array( 
            'post_type' => 'slides_type',
            'posts_per_page' => 3
        ) ); ?>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php $i = 0;
            if ($slide_query->have_posts()) : while ($slide_query->have_posts()) : $slide_query->the_post(); ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" <?php if ($i++ === 0) echo 'class="active"'; ?> ></li>
            <?php endwhile; endif; ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php 
            $i = 0;
            if ($slide_query->have_posts()) : while ($slide_query->have_posts()) : $slide_query->the_post(); ?>
            <?php
                if (has_post_thumbnail( $post->ID )) {
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                    $slideImg = $image[0];
                } else {
                    break;
                }
            ?>
            <div class="item<?php if ($i++ === 0) echo ' active'; ?>">
                <img src="<?php echo $slideImg; ?>" alt="<?php echo $post->post_title; ?>">
                <div class="carousel-caption">
                    <?php echo $post->post_content; ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Landing Page Cards -->
    <div class="container">
        <div class="row">
            <?php $query = new WP_Query( array( 
                'post_type' => 'page',
                'posts_per_page' => 3,
                'tag' => 'landing'
            ) );
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-4">
                <h2><?php echo $post->post_title; ?></h2>
                <p><?php echo $post->post_excerpt; ?></p>
                <p><a class="btn btn-default" href="<?php echo $post->guid; ?>" role="button">Learn more &raquo;</a></p>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
                    <!-- no 'cards' found -->
            <?php endif; ?>
        </div>
    </div>

    <!-- Content of home page -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php //the_content(); ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
