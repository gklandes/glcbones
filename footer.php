        <footer class="footer container" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
            <hr>
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
        </footer>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie10-viewport-bug-workaround.js"></script>
        <?php wp_footer(); ?>
    </div>
    </body>
</html>