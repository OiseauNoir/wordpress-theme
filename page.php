<?php get_header() ?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() . '/img/about-bg.jpg' ?>')">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                      <div class="page-heading">
                          <h1><?php the_title() ?></h1>
                          <hr class="small">
                          <span class="subheading">TODO: Add subtitle</span>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <!-- Main Content -->
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <?php the_content() ?>
              </div>
          </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer() ?>
