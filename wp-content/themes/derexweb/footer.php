<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die('Por favor no cargue esta p&aacute;gina directamente. &iexcl;Gracias!'); } ?>

  <!-- Footer
  ============================================= -->
  <footer id="footer" class="border-0" style="background-image: linear-gradient(to top, #61BFDB, #E0F2C2, #FFF);">

    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: transparent url('<?php bloginfo("url"); ?>/images/footer.png') center bottom / cover;"></div>

    <div class="container" style="padding-bottom: 380px;">

      <!-- Footer Widgets
      ============================================= -->
      <div class="footer-widgets-wrap">

        <div class="row justify-content-center text-center py-sm-5">
          <div class="col-12 mb-4">

            <div class="widget clearfix">
              <a href="#"><img src="<?php bloginfo("url"); ?>/images/logo.png" alt="Image" class="mx-auto footer-logo mb-3"></a>
              <span class="tetx-uppercase op-05 d-block">
                Sitio web de STEM creado por Moisés Serrano y Derek Serrano.<br />
                Mantenido por Derek Serrano y potenciado por WordPress.
              </span>
            </div>

          </div>

          <div class="clear"></div>

        </div>

      </div><!-- .footer-widgets-wrap end -->

    </div>

    <div class="col-auto text-center mt-4 text-smaller pb-3">
      &#x1f12f; 2022 Algunos derechos reservados. Creado por Moisés Serrano y Derek Serrano. <?php if ( is_user_logged_in() ) { ?><a href="<?php echo wp_logout_url(home_url()); ?>">Salir</a>.<?php } else { ?><a class="login" href="<?php echo esc_url( wp_login_url( home_url() ) ); ?>">Ingresar</a>.<?php }?>
    </div>

  </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<!-- <div id="gotoTop" class="icon-angle-up"></div> -->

<!-- JavaScripts
============================================= -->
<script src="<?php bloginfo("url"); ?>/js/jquery.js"></script>
<script src="<?php bloginfo("url"); ?>/js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?php bloginfo("url"); ?>/js/functions.js"></script>

<!-- Fragmento de código de Google Analytics añadido por Site Kit -->
<script type='text/javascript' src='https://www.googletagmanager.com/gtag/js?id=UA-246851188-1' id='google_gtagjs-js' async></script>
<script type='text/javascript' id='google_gtagjs-js-after'>
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('set', 'linker', {"domains":["derekserrano.com"]} );
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "UA-246851188-1", {"anonymize_ip":true});
gtag("config", "G-80272Q09ES");
</script>
<!-- Final del fragmento de código de Google Analytics añadido por Site Kit -->
</body>
</html>
