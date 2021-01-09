<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <div class="container">
    <div class="intro-content">
      <?php
      $title = get_the_title();
      $split_title = explode(" ", $title);
      $last_element = array_pop($split_title);
      ?>
      <h1 class="w_color">
        <?php print_r(implode(" ", $split_title)); ?><span> <?php print_r($last_element); ?></span>
      </h1>
    </div>
  </div>
  </header>




  <section class="single-service" id="software-development">
    <div class="container">
      <div class="row pt_xl wow fadeInUp animated" style="visibility: visible;">
        <div class="col-lg-3">
          <div class="heading mb_small">
            <ul>
              <li>Introduction</li>
              <li>Personal information</li>
              <li>Legality of information</li>
              <li>Retention of information</li>
              <li>Disclosure of information</li>
              <li>Storage of information</li>
              <li>Contact us</li>
            </ul>
          </div>
        </div>
        <div class="offset-lg-1 col-lg-8 brands alt d-flex align-items-center">
          <div class="heading mb_small">
            <h6 class="smaller">DECAGON <?php the_title(); ?></h6>

            <?php the_content(); ?>
          </div>
          <div class="row">
          </div>
        </div>
      </div>
    </div>
  </section>


<?php }
get_footer();
?>