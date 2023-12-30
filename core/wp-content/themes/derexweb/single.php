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
            <div class="col-lg-7 derexpost portfolio-single-content content-sticky">

              <!-- Portfolio Single - Description
              ============================================= -->
              <h1 class="display-3 fw-bolder"><?php the_title(); ?></h1>

<?php the_content(); ?>

<?php if( in_category( array( 'programacion', 'robotica' ) ) ): ?>
<?php $media = get_attached_media('application/zip', get_the_ID()); // Get image attachment(s) to the current Post
foreach($media as $m) { ?>
              <div class="center my-5">
                <a href="<?php echo wp_get_attachment_url( $m->ID ); ?>" download>
                  <button type="button" class="btn btn-success btn-lg btn3d"><i class="icon-download"></i> Descargar</button>
                </a>
              </div>
<?php } ?>
<?php endif; ?>

              <div class="line my-5"></div>

              <!-- Portfolio Single - Meta
              ============================================= -->
              <ul class="portfolio-meta bottommargin">
                <li><span><i class="icon-user"></i>Publicado por:</span> <?php the_author(); ?></li>
                <li><span><i class="icon-calendar3"></i>Fecha:</span> <?php the_date(); ?></li>
              </ul>
              <!-- Portfolio Single - Meta End -->

              <div class="line my-5"></div>

              <!-- Portfolio Single - Share
              ============================================= -->
              <div class="d-flex justify-content-between align-items-center mb-5">
                <span>Compartir:</span>
                <div>
                  <a href="#" class="social-icon si-small si-light mb-0 si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-instagram">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-email3">
                    <i class="icon-email3"></i>
                    <i class="icon-email3"></i>
                  </a>
                </div>
              </div>
              <!-- Portfolio Single - Share End -->

            </div><!-- .portfolio-single-content end -->

          </div>
<? } // end while
} // end if
?>

        </div>
    </section><!-- #content end -->

<?php get_footer(); ?>
