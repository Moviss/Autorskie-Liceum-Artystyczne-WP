<section class="news">

        <!-- Miejsce na posty aktualności -->
            <div class="main-news">
                <h1 class="news-title">AKTUALNOŚCI</h1>
                <div class="news-content">
                    <?php
                    $args = array( 'numberposts' => 1 );
                    $lastposts = get_posts( $args );
                    foreach($lastposts as $post) : setup_postdata($post); ?>
                    	<h2><?php the_title(); ?></h2>
                        <p class="post-date"><?php the_date(); ?></p>
                    	<?php the_content(); ?>
                    <?php endforeach; ?>
                </div>
                <a href="/aktualnosci/"><button class="czytaj" type="button">czytaj dalej</button></a>
            </div>
</section>
