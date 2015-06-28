<?php
/*
 Template Name: Custom Home
*/
?>
<?php get_header(); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" style="background: blue; color: white;">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae ex risus. Aenean imperdiet vulputate accumsan. Vivamus vitae bibendum augue. Aenean sodales, leo quis commodo bibendum, ligula metus tincidunt ipsum, id pulvinar justo leo quis mi. Morbi ullamcorper sollicitudin malesuada.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>



    <!-- <div id="content">
        <div id="inner-content" class="wrap cf">
            <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                    <header class="article-header">
                        <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <p class="byline entry-meta vcard">
                        <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                        /* the time the post was published */
                        '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                        /* the author of the post */
                        '<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                        ); ?>
                        </p>
                    </header>
                    <section class="entry-content cf">
                        <?php the_content(); ?>
                    </section>
                    <footer class="article-footer cf">
                        <p class="footer-comment-count">
                            <?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
                        </p>

                        <?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
                        <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                    </footer>
                </article>
                <?php endwhile; ?>
                        <?php bones_page_navi(); ?>
                <?php else : ?>
                    <article id="post-not-found" class="hentry cf">
                        <header class="article-header">
                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                        </header>
                        <section class="entry-content">
                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                        </section>
                        <footer class="article-footer">
                                <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                        </footer>
                    </article>
                <?php endif; ?>

            </main>
            <?php get_sidebar(); ?>
        </div>
    </div> -->

<?php get_footer(); ?>
