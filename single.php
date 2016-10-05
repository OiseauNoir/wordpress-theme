<?php get_header() ?>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() . '/img/post-bg.jpg' ?>')">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                      <div class="post-heading">
                          <h1><?php the_title() ?></h1>
                          <h2 class="subheading">TODO: ADD SUBTITLE</h2>
                          <span class="meta">Posted by <?php the_author() ?> on <?php the_time('F j, Y') ?></span>
                      </div>
                  </div>
              </div>
          </div>
      </header>

      <!-- Post Content -->
      <article>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                      <?php the_content() ?>
                  </div>
              </div>
          </div>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer() ?>
