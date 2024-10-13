<?php get_header(); ?>

<div class="o-layout-row">
  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="c-article-header">
        <?php if ( has_post_thumbnail() ) : ?>
              <div class="c-article-featured-image">
                <?php the_post_thumbnail('full'); ?>
              </div>
            <?php endif; ?>
          <div class="o-wrapper-wide">
          
           
          </div>
        </header>
        <!-- /article-header -->
        <article <?php post_class(); ?> role="article">
          <section class="editor-content clearfix">
          <div class="c-post-inner">
            <h1 class="h2-style"><strong><?php the_title();?></strong></h1>
             <?php the_content(); ?>
             <!-- AddToAny BEGIN -->
              <hr />
              <footer class="post-footer">
                <div>
                  <p>Share Article:</p>
                              <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                              <a class="a2a_button_email"></a>
                              <a class="a2a_button_linkedin"></a>
                              <a class="a2a_button_facebook"></a>
                              <a class="a2a_button_x"></a>
                              </div>
                              <script async src="https://static.addtoany.com/menu/page.js"></script>
                              <!-- AddToAny END -->
                </div>
                <div>
                  <a class="c-back-link" href="/news/"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M20.93 14A7 7 0 0 1 14 20H5.5v-2H14a5 5 0 1 0 0-10H6.914l2.5 2.5L8 11.914L3.086 7L8 2.086L9.414 3.5L6.914 6H14a7 7 0 0 1 7 7v1z"/></svg> Back to News </a>
                </div>
              </footer>
          </div>
          </section>
        </article>
      <?php endwhile; ?>
  
      <?php else : ?>
        <?php get_template_part( 'template-part/post/not-found' ); ?>
      <?php endif; ?>
  

    
  </main>
</div>
<!-- /layout-row-->

<?php get_footer(); ?>
