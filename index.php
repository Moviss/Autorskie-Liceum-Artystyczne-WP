<?php

get_template_part('sub-header-news'); ?>

<section class="news">
        <h1 class="news-title">AKTUALNOŚCI</h1>
        <div class="news-content">
<?php        while(have_posts()) {
              the_post();?>
              <div class="post">

              <h2><?php the_title(); ?></h2>
              <p class="post-date"><?php the_date(); ?></p>
              <br />
              <?php the_content(); ?>
              <br/>
              </div>
              <?php } ?>
        </div>
        <?php
           ?>
    </section>


<?php
get_footer();

?>
