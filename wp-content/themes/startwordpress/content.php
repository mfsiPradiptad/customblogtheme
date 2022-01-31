<div class="blog-post">
  <h2 class="blog-post-title"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?> </a></h2>
  <p class="blog-post-meta"> <?php echo get_the_date();?> by <a href="#"><?php the_author(); ?></a>. <a href="<?php comments_link(); ?>">
        <?php  printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 		get_comments_number() ) ); ?>
        </a>
  </p>

  <p>
    <?php the_excerpt(); ?>
  </p>
  <hr />

  <!-- the rest of the content -->
</div>
<!-- /.blog-post -->