<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>

  <?php if ( 'post' === get_post_type() ) : ?>
      <div class="post-details">
        <i class="fa fa-user"></i> <?php the_author(); ?>
        <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
        <i class="fa fa-folder"> </i><?php the_category(', '); ?>
        <i class="fa fa-tags"></i> <?php the_tags(); ?>
        <div class="post-comments-badge">
          <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number( 0, 1, '%'); ?></a>
        </div>
      </div> <!-- post-details -->

        <?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i>', '</div>' ); ?>

    <?php endif; ?>
  </header><!-- .entry-header -->

<?php if ( has_post_thumbnail()) { ?>
    <div class="post-image">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php } ?>
    <div class="post-body">
      <?php the_content(); ?>
    </div>
    <div class="post-comments">
      <?php     // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>
    </div>
</article><!-- #post-## -->
