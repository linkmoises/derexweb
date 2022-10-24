<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php get_header(); ?>

    <section id="page-title" class="page-title-center" style="background: #DAF7A6 url('<?php bloginfo("url"); ?>/images/hero-bg-icons-o.svg') center center / cover;">
      <div class="container clearfix">
        <h1>Mi Blog</h1>
      </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="container">

<?php
if ( have_posts() ) {
while ( have_posts() ) {
the_post(); ?>
          <div class="row gutter-50">

            <div class="col-lg-5 portfolio-single-image">

              <!-- Portfolio Single Image
              ============================================= -->
              <div class="masonry-thumbs grid-container masonry-gap-xl grid-1" data-lightbox="gallery">
                <a href="<?php echo get_the_post_thumbnail_url( null, 'blog-thumb' ); ?>" data-lightbox="gallery-item" class="grid-item"><img class="rounded-4" src="<?php echo get_the_post_thumbnail_url( null, 'blog-thumb' ); ?>" alt="Image"></a>
              </div><!-- .portfolio-single-image end -->

            </div>

            <!-- Portfolio Single Content
            ============================================= -->
            <div class="col-lg-7 portfolio-single-content content-sticky">

              <!-- Portfolio Single - Description
              ============================================= -->
              <h1 class="display-3 fw-bolder"><?php the_title(); ?></h1>

<?php the_content(); ?>

            </div><!-- .portfolio-single-content end -->

          </div>
<? } // end while
} // end if
?>

        </div>
    </section><!-- #content end -->

<?php get_footer(); ?>
