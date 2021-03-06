<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // pre-load web font ?>
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Raleway" rel="stylesheet">
        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-controls="mainNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>/#" itemscope itemtype="http://schema.org/Organization">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="mainNav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/#<?php echo anchorFromTitle($post->post_title); ?>">
                                <?php echo $post->post_title; ?>
                            </a>
                        </li>
                    </ul>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div><!--/.navbar-collapse -->
                
            </div>
        </nav>