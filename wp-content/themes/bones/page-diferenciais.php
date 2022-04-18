<?php
/*
 Template Name: Diferenciais
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

     <section class="c-banner c-banner--page" style="background: url('<?php echo get_field('banner_image'); ?>');">
        <?php 
          $title = get_field('banner_title');
          if(!empty($title)): 
        ?>
          <div class="c-banner__container">
            <div class="o-wrapper o-wrapper--1280">
              <h2 class="o-ttl o-ttl--47 o-ttl--white o-ttl--center o-ttl--semibold o-ttl--last"><?php echo $title; ?></h2>
            </div>
          </div>
        <?php endif; ?>
 			</section>

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 				<div class="c-differentials">
					<div class="c-background c-background--white">
						<div class="o-wrapper o-wrapper--1280">
							<div class="c-differentials__content">
                <ul class="c-differentials__menu">
                  <li class="c-differentials__menu-item">
                    <a href="#empresa" class="js-differentials-current is-active">Empresa</a>
                  </li>

                  <li class="c-differentials__menu-item">
                    <a href="#projetos" class="js-differentials-current">Projetos</a>
                  </li>
                </ul>
              </div>

              <div class="c-differentials__container is-active" id="empresa">
                <?php while( have_rows('company') ): the_row(); ?>

                  <div class="c-differentials__block">
                    <div class="c-differentials__ico">
                      <img src="<?php echo get_sub_field('icon'); ?>">
                    </div>
                    <div class="c-differentials__description">
                      <h3 class="o-ttl o-ttl--color-primary o-ttl--25 o-ttl--semibold"><?php echo get_sub_field('title'); ?></h3>
                      <p><?php echo get_sub_field('text'); ?></p>
                    </div>
                  </div>

                <?php endwhile; wp_reset_postdata(); ?>
              </div>

              <div class="c-differentials__container" id="projetos">
                <?php while( have_rows('projects') ): the_row(); ?>

                  <div class="c-differentials__block">
                    <div class="c-differentials__ico">
                      <img src="<?php echo get_sub_field('icon'); ?>">
                    </div>
                    <div class="c-differentials__description">
                      <h3 class="o-ttl o-ttl--color-primary o-ttl--25 o-ttl--semibold"><?php echo get_sub_field('title'); ?></h3>
                      <p><?php echo get_sub_field('text'); ?></p>
                    </div>
                  </div>

                <?php endwhile; wp_reset_postdata(); ?>
              </div>
						</div>
					</div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
