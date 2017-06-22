<?php get_header(); ?>
<div class="content container">
    <div class="row">
        <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" class="col-sm-9">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
               get_template_part( 'post-formats/format', get_post_format() );
            ?>
            <?php endwhile; endif; ?>
        </main>
        <?php //get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
