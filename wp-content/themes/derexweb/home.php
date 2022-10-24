<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>
<?php get_header(); ?>

    <!-- Hero
    ============================================= -->
    <section id="slider" class="slider-element include-header" style="background-color: #DAF7A6;">

      <div class="position-absolute top-0 start-0 w-100 h-100" style="background: transparent url('<?php bloginfo("url"); ?>/images/hero-bg-icons.svg') center center / cover; opacity: 0.04"></div>

      <div class="container">
        <div class="row align-items-center min-vh-100 pt-5 pb-4">
          <div class="col-lg-6">
            <h1 class="display-3 fw-bolder">¡Bienvenido a<br> mi <span class="color">Blog</span>!</h1>
            <p class="mt-4 mb-5 fw-light">A veces lucho contra Ganondorf, a veces toco violín, a veces juego Calabozos y Dragones, a veces programo con Scratch y hago robots.</p>
            <a href="<?php bloginfo('url'); ?>/sobre-mi/" class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium">Conoce sobre mí</a>
          </div>
          <div class="col-lg-6 align-self-end mt-5 mt-lg-0">
            <img src="<?php bloginfo("url"); ?>/images/hero.png" alt="Derek">
          </div>
        </div>
      </div>

      <div class="shape-divider" data-shape="wave-2" data-position="bottom" data-height="80"></div>

      <div class="position-relative d-none d-sm-block">
        <img src="<?php bloginfo("url"); ?>/images/navi.png" alt="Navi" class="background-img pos-right float-anim" style="top: -320px">
      </div>

    </section>

    <!-- Content
		============================================= -->
		<section id="content">

			<div id="derek-scratch" class="content-wrap">
				<div class="container clearfix">

					<div class="row justify-content-center mb-5">
						<div class="col-xl-6 col-lg-8 text-center">
							<h3 class="h1 fw-bold mb-3">Mis proyectos de STEM</h3>
						</div>
					</div>

					<div class="post-grid row col-mb-30">

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
			</div>

      <div id="derek-blog" class="section" style="padding: 100px 0; background-color: #ECF4F1">
        <div class="shape-divider" data-shape="wave-5" data-height="50"></div>
          <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('<?php bloginfo("url"); ?>/images/hero-bg-icons.svg') center center / cover; opacity: 0.04"></div>
          <div class="container z-3">
            <h2 class="color text-center h1 fw-bold mb-5 pb-2">Mi Blog</h2>

            <div class="row gutter-50">

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$home_loop = new WP_Query(
	array(
		'post_type' => 'post',
		'posts_per_page' => 6,
		'paged' => $paged,
    'category__not_in' => array( 4 , 5 ),
		//'order' => 'ASC',
		//'orderby' => 'name'
	)
);
?>
<?php if ( $home_loop->have_posts() ) { ?>
<?php while ( $home_loop->have_posts() ) : $home_loop->the_post(); ?>
              <div class="col-lg-4">

                <!-- Post Article -->
                <div class="posts-md">
                  <div class="entry">
                    <div class="entry-image position-relative mb-md-4">
                      <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url( null, 'home-thumb' ); ?>" alt="<?php the_title(); ?>" class="rounded-5">
                        <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-width="110" data-height="30" data-fill="#ECF4F1"></div>
                      </a>
                      <div class="entry-date"><?php the_time( 'M' ); ?><span><?php the_time( 'j' ); ?></span></div>
                    </div>
                    <div class="entry-title nott">
                      <h3><a class="ls0 h3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                  </div>
                </div>
              </div>
<?php endwhile; ?>
<?php } ?>

            </div>

          </div>
        <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60"></div>
      </div>

		</section><!-- #content end -->

<?php get_footer(); ?>
