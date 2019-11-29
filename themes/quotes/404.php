<?php get_header(); ?>

<div class="broken-page">
    <i class="fas fa-quote-left"></i>
        <div class="broken-content">
        <h1>You landed on a broken page</h1>
        <h3> - Admin</h3>
        </div>
    <i class="fas fa-quote-right"></i>
</div>

<div class="search">
    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
</div>

<?php get_footer();?>