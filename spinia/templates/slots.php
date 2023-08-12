<?php
/*Template Name: Slots*/
?>

<?php get_header()?>

  <div class="main-content">
    <section class="games-block slots">
      <div class="games-block-title">
        <h1 class="games-title"><?php the_title(); ?></h1>
      </div>
      <?php
        if ($items = get_posts(array('numberposts' => 50, 'post_type' => 'Slots'))) {
          echo '<div class="games-block-list">';
            foreach($items as $item) {
              $drop = get_field('drop', $item->ID);
              $new = get_field('new', $item->ID);
              $hot = get_field('hot', $item->ID);

              echo '<div class="game-card">';
                echo '<div class="game-card-block">';
                  echo get_the_post_thumbnail($item->ID);
                echo '</div>';
                echo '<div class="game-card-back">';
                  echo '<div class="game-card-back-buttons">';
                    echo '<span class="game-card-back-title">'.$item->post_title.'</span>';
                    echo '<a href="/play" class="game-card-play-link">';
                      echo '<div class="game-card-play-icon" style="background-image: url('.get_template_directory_uri().'/images/play.svg);"></div>';
                    echo '</a>';
                    echo '<a href="'.get_permalink($item->ID).'" class="game-card-play">Play for Fun</a>';
                  echo '</div>';
                  echo '<div class="game-card-back-provider">';
                    echo '<div class="game-card-back-provider-img" style="background-image: url(/images/providers/evolution.svg);"></div>';
                  echo '</div>';
                echo '</div>';
                echo '<div class="game-card-labels">';
                  if($new) {
                    echo '<div class="game-card-label new">'.$new.'</div>';
                  }
                  if($hot) {
                    echo '<div class="game-card-label hot">'.$hot.'</div>';
                  }
                echo '</div>';  
                if($drop) {
                  echo '<div class="game-card-drops" style="background-image: url('.$drop.');"></div>';
                }
              echo '</div>';
            }
          echo '</div>';
        }
      ?>
    </section>
    <section class="main-text">
      <div class="main-text-block-content">
        <?php
          echo the_content(); 
        ?>
      </div>
    </section>

<?php get_footer()?>