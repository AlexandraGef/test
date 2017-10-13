<div class="row footer-menu" >
    <div class="col-lg-12">
        <div class="col-md-3">
    <?php
    $args = array(
        'theme_location' => 'footer',
        'menu_class' => 'nav nav-pills nav-stacked'
    );
    ?>
    <?php wp_nav_menu($args);?>
</div>
    </div>
</div>

<footer class="site-footer">
    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
</footer>

<?php wp_footer() ?>
</body>
</html>