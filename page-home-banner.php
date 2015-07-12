<?php
/*
 Template Name: Banner Home
*/
?>
<?php get_header(); ?>
<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
        if (has_post_thumbnail( $post->ID )) {
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            $jtBack = 'url('.$image[0].')';
        } else {
            $jtBack = 'none';
        }
    ?>
    <div class="jumbotron" style="background-image: <?php echo $jtBack; ?>;">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; endif; ?>

    <!-- Landing Page Cards -->
    <div class="container">
        <div class="row">
            <?php $query = new WP_Query( array( 
                'post_type' => 'page',
                // 'posts_per_page' => 3
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
</main>

<?php get_footer(); ?>
