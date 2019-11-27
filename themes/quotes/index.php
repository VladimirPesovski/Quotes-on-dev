<?php get_header(); ?>
<?php if( have_posts() ) :?>
<section id = "quotes-content">
<!-- The WordPress Loop: loads post content  -->


    <?php while( have_posts() ) :
        the_post(); ?>
    
    <i class="fas fa-quote-left"></i>

    <span class="merged">
        <div class="content">
            <?php the_content(); ?>
            <?php echo get_field('quote_source');?>
            <?php echo get_field('quote_url');?>
        </div>

        <div class="title">
            <h2><span>- </span><?php the_title(); ?></h2>
        </div>
    </span>

    <i class="fas fa-quote-right"></i>

    <!-- Loop ends -->

    <?php endwhile;?>
    
    </section>
    
    <button id ="quote-button">Show Me Another!</button>
    <!-- <?php the_posts_navigation();?> -->
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>