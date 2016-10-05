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
                      <a href="<?php the_permalink() ?>">
                          <h2 class="post-title">
                              <?php the_title() ?>
                          </h2>
                          <h3 class="post-subtitle">
                              <?php echo get_the_excerpt() ?>
                          </h3>
                      </a>
                      <p class="post-meta">Posted by <?php the_author() ?> on <?php the_time('F j, Y') ?></p>
                  </div>
                  <hr>
                <?php endwhile; ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php echo get_previous_posts_link('&larr; Newer Posts'); ?>
                    </li>
                    <li class="next">
                        <?php echo get_next_posts_link('Older Posts &rarr;'); ?>
                    </li>
                </ul>
              <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>
