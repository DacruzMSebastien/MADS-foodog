
            <!-- HEADER -->
            <?php get_header(); ?>
            <!-- CONTENT -->
            <div id="content">
                <?php require "featured.php"; ?>
            </div>
            <?php 
   pagination($wp_query);
?>
        </div>
        <!-- FOOTER -->
        <?php get_footer(); ?>
    </body>
</html>