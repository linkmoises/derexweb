<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php get_header(); ?>

    <section id="page-title" class="page-title-center" style="background: #DAF7A6 url('<?php bloginfo("url"); ?>/images/hero-bg-icons-o.svg') center center / cover;">
      <div class="container clearfix">
        <h1>Archivo</h1>
      </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="container">

          <div class="row gutter-50">

            <?php
            $featured_loop = new WP_Query(
            	array(
            		'post_type' => 'post',
            		'posts_per_page' => 6,
            		'cat' => array( 4, 5),
            		//'order' => 'ASC',
            		//'orderby' => 'name'
            	)
            );
            ?>
            <?php if ( $featured_loop->have_posts() ): ?>
            <?php while ( $featured_loop->have_posts() ) : $featured_loop->the_post(); ?>
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');?>
                        <div class="entry col-lg-4 col-md-6">
            							<div class="grid-inner shadow-sm card rounded-4">
            								<a href="<?php the_permalink(); ?>">
            									<img src="<?php echo get_the_post_thumbnail_url( null, 'home-thumb' ); ?>" alt="<?php the_title(); ?>" class="card-img-top">
            								</a>
            								<div class="p-4">
            									<div class="entry-title">
            										<h5 class="fw-medium text-danger mb-3">Proyectos Básicos</h5>
            										<h3 class="nott ls0 h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            									</div>
            									<div class="entry-content mt-4">
            										<p class="mb-0">Dot ha hecho un desastre de colores en la pantalla.</p>
            									</div>
            								</div>
            							</div>
            						</div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>


          </div>

        </div>
    </section><!-- #content end -->

<?php get_footer(); ?>
