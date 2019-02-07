<?php
  /* ==============
     DEFAULT FOOTER
     ============== */
?>
      <?php $sponsors = get_field('sponsors', 'options'); if($sponsors): ?>
        <footer id="footer-sponsors">
          <h2 class="sponsors-heading"><span>Sponsors</span></h2>
          <div class="wrap">
            <?php foreach($sponsors as $img): ?>
              <div>
                <div class="sponsor-single">
                  <img src="<?php echo $img['sizes']['small']; ?>" alt="Logo for <?php echo $img['title']; ?>" width="<?php echo $img['width']; ?>" height="<?php echo $img['height']; ?>" />
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </footer>
      <?php endif; ?>
    </div>
    <footer id="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
      <div class="wrap">
        <a href="https://alamedabgc.org/" target="_blank">
          <img src="<?php echo asset_path('images/abgc-logo-white.svg'); ?>" alt="Logo for the Alameda Boys and Girls Club" class="logo-footer" />
        </a>
        <nav class="nav-footer" role="navigation">
          <?php
            ex_contact('email', 'global');
            ex_contact('phone', 'global');
            wp_nav_menu(array(
              'container' => 'ul',                    // enter '' to remove nav container
              'container_class' => 'footer-links cf',	// class of container (should you choose to use it)
              'menu' => __('Footer', 'exonym'),	      // nav name
              'menu_class' => 'nav footer-nav cf',    // adding custom nav class
              'theme_location' => 'footer-menu',		  // where it's located in the theme
              'before' => '',							            // before the menu
              'after' => '',							            // after the menu
              'link_before' => '',					          // before each link
              'link_after' => '',						          // after each link
              'depth' => 1,							              // limit the depth of the nav
              'fallback_cb' => ''						          // fallback function
            ));
            ex_social();
          ?>
        </nav>
        <p class="copyright">Site Built and Maintained by <a href="http://beyondcool.com">beyond cool, llc</a></p>
        <p class="copyright">&copy; Copyright <?php echo date('Y '); ex_brand('legal'); ?> <br /> Tax ID #<?php the_field('tax_id_number', 'options'); ?></p>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
