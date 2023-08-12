<?php get_header(); ?>

<div class="main-content">
    <section class="games-block slots">
        <div class="games-block-title">
            <h1 class="games-title"><?php single_cat_title(); ?></h1>
        </div>
        <?php
            if ( have_posts() ) :
                echo '<div class="games-block-list">';
                    while ( have_posts() ) : the_post();
                        echo '<div class="game-card">';
                            echo '<div class="game-card-block">';
                            echo the_post_thumbnail();
                            echo '</div>';
                            echo '<div class="game-card-back">';
                            echo '<div class="game-card-back-buttons">';
                                echo '<span class="game-card-back-title">'.get_the_title().'</span>';
                                echo '<a href="#" class="game-card-play-link">';
                                echo '<div class="game-card-play-icon" style="background-image: url('.get_template_directory_uri().'/images/play.svg);"></div>';
                                echo '</a>';
                                echo '<a href="'.get_permalink().'" class="game-card-play">Play for Fun</a>';
                            echo '</div>';
                            echo '<div class="game-card-back-provider">';
                                echo '<div class="game-card-back-provider-img" style="background-image: url(/images/providers/evolution.svg);"></div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="game-card-labels">';
                            $new = get_field('new');
                            if($new) {
                                echo '<div class="game-card-label new">'.$new.'</div>';
                            }
                            $hot = get_field('hot');
                            if($hot) {
                                echo '<div class="game-card-label hot">'.$hot.'</div>';
                            }
                            echo '</div>';  
                            $drop = get_field('drop');
                            if($drop) {
                            echo '<div class="game-card-drops" style="background-image: url('.$drop.');"></div>';
                            }
                        echo '</div>';
                    endwhile;
                echo '</div>';
            else :
            endif;
      ?>
    </section>

<?php get_footer(); ?>
