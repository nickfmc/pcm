<?php get_header(); ?>

<div class="o-layout-row">
  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/WebPageElement">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <header class="c-article-header">
        <div class="o-wrapper-wide">
          <h1><?php the_title();?></h1>
        </div>
      </header>
      <!-- /article-header -->
      <article <?php post_class(); ?> role="article">
        <section class="editor-content  clearfix">
         <?php the_content(); ?>
        </section>
      </article>
    <?php endwhile; ?>

    <?php else : ?>
      <?php get_template_part( 'template-part/post/not-found' ); ?>
    <?php endif; ?>

    <?php get_sidebar(); // sidebar ?>
    
  </main>
</div>
<!-- /layout-row-->

<?php get_footer(); ?>
