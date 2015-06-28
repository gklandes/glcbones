            <hr>

            <footer>
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
            </footer>
        </div></div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/ie10-viewport-bug-workaround.js"></script>
        <?php wp_footer(); ?>
    </div>
    </body>
</html>