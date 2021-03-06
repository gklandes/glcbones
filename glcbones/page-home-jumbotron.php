<?php
/*
 Template Name: Jumbotron Home
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

    <!-- Landing Page Sections -->
    <?php $query = new WP_Query( array( 
        'post_type' => 'page',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-landing.php', // template name as stored in the dB
            )
        ),
        'orderby' => '-menu_order',
        'order' => 'ASC'
    ) );
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    <div class="container">
        <a id="<?php echo anchorFromTitle($post->post_title); ?>"></a>
        <div class="row home-section">
            <div class="col-md-3">
                <h2 class="home-section-title"><?php echo $post->post_title; ?></h2>
            </div>
            <div class="col-md-9">
                <p><?php the_content(); //echo $post->post_excerpt; ?></p>
            </div>
            <!-- <pre><?php print_r($post); ?></pre> -->
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
        <!-- no 'cards' found -->
    <?php endif; ?>
</main>

<?php get_footer(); ?>
