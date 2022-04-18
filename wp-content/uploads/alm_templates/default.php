<div class="c-enterprises__block">
                    <a href="<?php echo get_permalink(); ?>">
                      <img src="<?php echo get_field('image_block'); ?>" alt="<?php the_title(); ?>">
                      <div class="c-enterprises__content">
                        <h3 class="o-ttl o-ttl--25 o-ttl--color-primary"><?php the_title(); ?></h3>
                        <?php echo get_field('description_block'); ?>
                      </div>
                      
                      <div class="c-enterprises__button">
                        <svg width="13" height="24">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left" />
                        </svg>
                      </div>
                    </a>
                  </div>