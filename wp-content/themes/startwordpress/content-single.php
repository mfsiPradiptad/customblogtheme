<div class="blog-post">
  <h2 class="blog-post-title"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?> </a></h2>
  <p class="blog-post-meta"> <?php echo get_the_date();?> by <a href="#"><?php the_author(); ?></a></p>

  <p>
    <?php the_content(); ?>
  </p>
  <hr />

  <!-- the rest of the content -->
</div>
<!-- /.blog-post -->