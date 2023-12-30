<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php get_header(); ?>

    <section id="page-title" class="page-title-center" style="background: #DAF7A6 url('<?php bloginfo("template_url"); ?>/images/hero-bg-icons-o.svg') center center / cover;">
      <div class="container clearfix">
        <h1><?php the_archive_title(); ?></h1>
      </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
      <div class="content-wrap">
        <div class="container">

          <div class="row gutter-50">

            <div class="col-lg-7 portfolio-single-image">

              <!-- Portfolio Single Image
              ============================================= -->
              <div class="masonry-thumbs grid-container masonry-gap-xl grid-1 grid-md-2" data-lightbox="gallery">
                <a href="images/blocks/preview/portfolio-single/1.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-5" src="images/blocks/preview/portfolio-single/1.jpg" alt="Image"></a>
                <a href="images/blocks/preview/portfolio-single/2.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-5" src="images/blocks/preview/portfolio-single/2.jpg" alt="Image"></a>
                <a href="images/blocks/preview/portfolio-single/3.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-5" src="images/blocks/preview/portfolio-single/3.jpg" alt="Image"></a>
                <a href="images/blocks/preview/portfolio-single/4.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-5" src="images/blocks/preview/portfolio-single/4.jpg" alt="Image"></a>
                <a href="images/blocks/preview/portfolio-single/5.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-5" src="images/blocks/preview/portfolio-single/5.jpg" alt="Image"></a>
                <a href="images/blocks/preview/portfolio-single/6.jpg" data-lightbox="gallery-item" class="grid-item"><img class="rounded-5" src="images/blocks/preview/portfolio-single/6.jpg" alt="Image"></a>
              </div><!-- .portfolio-single-image end -->

            </div>

            <!-- Portfolio Single Content
            ============================================= -->
            <div class="col-lg-5 portfolio-single-content content-sticky">

              <!-- Portfolio Single - Description
              ============================================= -->
              <h2>Your Favourite Coffee Mug</h2>
              <p class="op-07">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, dolores, facere, corrupti delectus ex quidem adipisci tempore.<br><br>
              Illum molestias cupiditate eveniet dolore obcaecati voluptatibus est quos eos id recusandae officia. Cupiditate, voluptates quibusdam ipsum vel corporis laboriosam id est doloremque?</p>
              <!-- Portfolio Single - Description End -->

              <div class="line my-5"></div>

              <!-- Portfolio Single - Meta
              ============================================= -->
              <ul class="portfolio-meta bottommargin">
                <li><span><i class="icon-user"></i>Created by:</span> John Doe</li>
                <li><span><i class="icon-calendar3"></i>Completed on:</span> 17th March 2021</li>
                <li><span><i class="icon-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
                <li><span><i class="icon-link"></i>Client:</span> <a href="#">Google</a></li>
              </ul>
              <!-- Portfolio Single - Meta End -->

              <div class="line my-5"></div>

              <!-- Portfolio Single - Share
              ============================================= -->
              <div class="d-flex justify-content-between align-items-center">
                <span>Share:</span>
                <div>
                  <a href="#" class="social-icon si-small si-light mb-0 si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                  </a>
                  <a href="#" class="social-icon si-small si-light mb-0 si-rss">
                    <i class="icon-rss"></i>
                    <i class="icon-rss"></i>
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

        </div>
      </div>
    </section><!-- #content end -->

<?php get_footer(); ?>
