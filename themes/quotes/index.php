<?php get_header(); ?>
<?php if( have_posts() ) :?>
<section id = "quotes-content">
<!-- The WordPress Loop: loads post content  -->

<div><i class="fas fa-quote-left"></i></div>
    <?php while( have_posts() ) :
        the_post(); ?>
    <div>"</div>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <!-- Loop ends -->
    <?php endwhile;?>
    </section>
    <button id ="quote-button">Generate New Quote</button>
    <!-- <?php the_posts_navigation();?> -->
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
<?php get_footer();?>