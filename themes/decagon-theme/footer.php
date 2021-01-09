<footer class="footer">
  <div class="container">
    <section class="build-team">
      <h3>Build a dependable remote team.</h3>
      <a href="contact.php" class="btn footer-btn">Build your team</a>
    </section>
    <section class="footer-section">
      <div class="row">
        <div class="col-lg-5 cp-col">
          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          $logoURL = $logo[0];
          if (has_custom_logo()) {
            echo '<img class="header__logo" src="' . esc_url($logoURL) . '" alt="' . get_bloginfo('name') . '">';
          } else {
            echo '<h3>' . get_bloginfo('name') . '</h3>';
          }

          ?>
          <ul class="footer-social">
            <li>
              <a href="https://web.facebook.com/decagonhq/" target="_blank" rel="noopener noreferrer"><img src="./assets/img/Socmed/Facebook.svg" alt="Facebook" /></a>
            </li>
            <li>
              <a href="https://twitter.com/decagonins/" target="_blank" rel="noopener noreferrer"><img src="./assets/img/Socmed/Twitter.svg" alt="Twitter" /></a>
            </li>
            <li>
              <a href="https://www.instagram.com/decagonhq/" target="_blank" rel="noopener noreferrer"><img src="./assets/img/Socmed/Instagram.svg" alt="Instagram" /></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/school/decagon/" target="_blank" rel="noopener noreferrer"><img src="./assets/img/Socmed/LinkedIn.svg" alt="LinkedIn" /></a>
            </li>
          </ul>
          <p class="copyright-text">
            All rights reserved. ©
            <?php echo date("Y"); ?>
            <span>Decagon</span>
          </p>
        </div>
        <div class="col-lg-2 col-6 il-col">
          <h4 class="footer-heading">Information Links</h4>
          <ul class="footer-links">
            <li><a href="https://blog.decagonhq.com/">Blog</a></li>
            <li>
              <a href="https://applications.decagonhq.com/">For Developer</a>
            </li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="terms.php">Terms & Conditions</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-6 l-col">
          <h4 class="footer-heading">Location</h4>
          <ul class="footer-links">
            <li>Lagos, Nigeria</li>
            <li>Austin, Texas</li>
            <li>Berlin, Germany</li>
          </ul>
        </div>
        <div class="col-lg-3 cu-col">
          <h4 class="footer-heading">Contact Us</h4>
          <ul class="footer-links">
            <!-- <li><img src="./assets/img/Iconly/Bulk/Call.svg" alt="Call"><a href="tel:+1-888-240-1467">P: 888-240-1467</a></li> -->
            <li>
              <img src="./assets/img/Iconly/Bulk/Message.svg" alt="Mail" /><a href="mailto:info@decagonhq.com">info@decagonhq.com</a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>