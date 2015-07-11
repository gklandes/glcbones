<?php get_header(); ?>
<div class="content container">
    <div class="row">
        <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" class="col-sm-9">
            <article id="post-not-found" class="hentry cf">
                <header class="article-header">
                    <h1><?php _e( 'Epic 404 - Article Not Found', 'bonestheme' ); ?></h1>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'bonestheme' ); ?></p>
                </section>
                <section class="search">
                    <p><?php get_search_form(); ?></p>
                </section>
                <footer class="article-footer">
                    <p><?php _e( 'This is the 404.php template.', 'bonestheme' ); ?></p>
                </footer>
            </article>
        </main>
    </div>
</div>
<?php get_footer(); ?>
