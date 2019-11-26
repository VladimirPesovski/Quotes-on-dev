<?php get_header(); ?>
<?php if( have_posts() ) :?>
<section id = "quotes-content">
<!-- The WordPress Loop: loads post content  -->

    <?php while( have_posts() ) :
        the_post(); ?>
    <section class="submit-section">
    <!-- <h2><?php the_title(); ?></h2> -->
    <?php the_content(); ?>
    </section>

    <!-- Loop ends -->

    <?php endwhile;?>
    
    </section>
        <form>
            <input id="quote-title" type="text" placeholder="Your title goes here... " style="width: 300px; height: 30px;">
            <br>
            <textarea id="quote-content" type="text" cols= "100" rows= "8" placeholder="Your quote goes here... "></textarea>
        </form>

    <button id ="submit-button">Submit a Quote</button>
    <!-- <?php the_posts_navigation();?> -->
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>
<?php get_footer();?>