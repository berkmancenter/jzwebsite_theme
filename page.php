<?php /* Template Name: page */ ?>
<?php get_header(); ?>

  <div class="row">
    <div class="col-md-8 blog-main border-right main-content">
        <?php 
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          get_template_part( 'content_page');
        endwhile; endif; 
        ?>
    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>
