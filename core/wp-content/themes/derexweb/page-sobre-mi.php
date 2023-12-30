<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php get_header(); ?>

    <section id="page-title" class="page-title-center" style="background: #DAF7A6 url('<?php bloginfo("url"); ?>/images/hero-bg-icons-o.svg') center center / cover;">
      <div class="container clearfix">
        <h1>Sobre mí</h1>
      </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="container">

          <div class="row gutter-50">

            <div class="col-lg-7 portfolio-single-image">

              <!-- Portfolio Single Image
              ============================================= -->
              <div class="masonry-thumbs grid-container masonry-gap-xl grid-1 grid-md-2" data-lightbox="gallery">
                <a href="<?php bloginfo("url"); ?>/images/derek-galeria-1.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-4" src="<?php bloginfo("url"); ?>/images/derek-galeria-1.jpg" alt="Image"></a>
                <a href="<?php bloginfo("url"); ?>/images/derek-galeria-2.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-4" src="<?php bloginfo("url"); ?>/images/derek-galeria-2.jpg" alt="Image"></a>
                <a href="<?php bloginfo("url"); ?>/images/derek-galeria-3.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-4" src="<?php bloginfo("url"); ?>/images/derek-galeria-3.jpg" alt="Image"></a>
                <a href="<?php bloginfo("url"); ?>/images/derek-galeria-4.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-4" src="<?php bloginfo("url"); ?>/images/derek-galeria-4.jpg" alt="Image"></a>
              </div><!-- .portfolio-single-image end -->

            </div>

            <!-- Portfolio Single Content
            ============================================= -->
            <div class="col-lg-5 portfolio-single-content content-sticky">

              <!-- Portfolio Single - Description
              ============================================= -->
              <h1 class="display-3 fw-bolder">¡Soy Derek!</h1>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
<?php the_content(); ?>
<? } // end while
} // end if
?>

            </div><!-- .portfolio-single-content end -->

          </div>

        </div>
    </section><!-- #content end -->

<?php get_footer(); ?>
