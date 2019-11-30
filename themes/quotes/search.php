<?php get_header(); ?>
<?php if( have_posts() ) :?>
<section class = "search-results">
<!-- The WordPress Loop: loads post content  -->


    <?php while( have_posts() ) :
        the_post(); ?>
       
    <div class="search-merge">
    <i class="fas fa-quote-left"></i>
    <section class=search-content-title>
        <div class="search-content">
            <?php the_content(); ?>
            <?php echo get_post_meta( get_the_ID(), '_qod_quote_source_url', true);?>
        </div>
        <div class="search-title">
            <h2><span>- </span><span><?php the_title()?></span></h2>
        </div>
    </section>
    

    <i class="fas fa-quote-right"></i>
    </div>

    <!-- Loop ends -->

    <?php endwhile;?>
    
    </section>
    
   
   
<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>