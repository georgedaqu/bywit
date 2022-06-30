
<?php if(get_row_layout() == 'team'): ?>
<?php 
    $showTeam = get_sub_field('show_team_listing');
    if($showTeam){
        ?>
            <section class="team">
                <?php
                    $args = array(
                        'post_type' => 'team',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC',
                    );
                    $loop = new WP_Query($args);
                ?>
                <?php while($loop->have_posts()): ?>
                    <?php
                        $loop->the_post();
                        $icon = get_field('icon');
                        $iconPosition = get_field('icon_position');
                        $slogan = get_field('slogan');
                        $linkedin = get_field('linkedin_profile_url');
                    ?>
                    <article>
                        <div class="container">
                            <div class="team_left">
                                <figure class="<?php echo $iconPosition ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'team-image') ?>" alt="<?php the_title(); ?>" class="person">
                                    <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="icon">
                                </figure>
                                <div class="team_captions">
                                    <h3><?php the_title() ?></h3>
                                    <?php 
                                        if($linkedin){
                                            ?>
                                                <div class="follow">
                                                    <h4>Let's be in touch:</h4>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo $linkedin ?>" title="LinkedIn" target="_blank">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="LinkedIn">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                            <div class="team_right">
                                <h3 class="team_caption">
                                    <strong><?php echo $slogan; ?></strong>
                                    <span><?php the_title(); ?></span>
                                </h3>
                                <div class="team_desc">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </section>
        <?php
    }
?>


<?php endif; ?>
