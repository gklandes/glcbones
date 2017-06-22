<?php
/*
 Template Name: Landing page
 *
 * This page template redirects to the homepage with a targeted link to the 
 * appropriate section.
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<pre><?php
    $anchor = anchorFromTitle($post->post_title);
    header('Location: /#'.$anchor);
    exit;
?></pre>
<?php endwhile; endif; ?>
