<?php get_header() ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() . '/img/home-bg.jpg'; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php bloginfo('name') ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php bloginfo('description') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                  <div class="post-preview">
                      <a href="post.html">
                          <h2 class="post-title">
                              Man must explore, and this is exploration at its greatest
                          </h2>
                          <h3 class="post-subtitle">
                              Problems look mighty small from 150 miles up
                          </h3>
                      </a>
                      <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                  </div>
                  <hr>
                <?php endwhile; ?>
              <?php endif; ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer() ?>
