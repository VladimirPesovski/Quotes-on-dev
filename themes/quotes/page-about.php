<?php get_header(); ?>
<?php if( have_posts() ) :?>

    <div id ="about-title"><h2> <?php the_title(); ?></h2></div>
    <section id = "quotes-content">
<!-- The WordPress Loop: loads post content  -->

    <?php while( have_posts() ) :
        the_post(); ?>

    <i class="fas fa-quote-left"></i>

    <div class = "main-content">
    <div id ="about-content"><?php the_content(); ?></div>
    </div>

    <i class="fas fa-quote-right"></i>

    <!-- Loop ends -->

    <?php endwhile;?>
    
    </section>
    
   
    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
<?php get_footer();?>