<?php

  get_template_part('sub-header');

  while(have_posts()) {
      the_post();

  the_content();
}

  get_footer();

?>
