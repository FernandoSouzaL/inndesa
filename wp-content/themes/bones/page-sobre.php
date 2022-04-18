<?php
/*
 Template Name: Sobre
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

 				<div class="c-about">
          <div class="c-background c-background--white c-background--secondary">
            <div class="c-about__container c-about__container-2">
              <?php $textImage = get_field('text_image'); ?>

              <div class="c-about__ttl-txt">
                <div class="o-ttl--title-secondary">
                  <?php echo $textImage['text']; ?>
                </div>
              </div>

              <div class="c-about__img">
                <img src="<?php echo $textImage['image'] ?>">
              </div>
            </div>
					</div>

          <div class="c-background c-background--white">
						<div class="o-wrapper o-wrapper--1130">
							<div class="c-about__container c-about__container-2">
                <?php while( have_rows('objectives') ): the_row(); ?>
                
                  <div class="c-about__objectives">
                    <h3 class="o-ttl o-ttl--37 o-ttl--color-primary o-ttl--extrabold"><?php echo get_sub_field('title'); ?></h3>
                    <p><?php echo get_sub_field('text'); ?></p>
                  </div>

                <?php endwhile; wp_reset_postdata(); ?>
              </div>
						</div>
					</div>

          <?php 
            $textBanner = get_field('text_banner');
            $subTextBanner = $textBanner['text']; 
          ?>

          <section class="c-banner c-banner--600" style="background: url('<?php echo $textBanner['image']; ?>');">
            <?php 
              if(!empty($textBanner['title'])): 
            ?>
              <div class="c-banner__container">
                <div class="o-wrapper o-wrapper--1280">
                  <h2 class="o-ttl o-ttl--37 o-ttl--white o-ttl--center o-ttl--extrabold o-ttl--last"><?php echo $textBanner['title']; ?></h2>
                </div>
              </div>
            <?php endif; ?>
          </section>

          <div class="c-about__container c-about__container-3">
            <?php while( have_rows('text_banner') ): the_row(); ?>
              <?php while( have_rows('text') ): the_row(); ?>
                
                <div class="c-about__text">
                  <h3 class="o-ttl o-ttl--25 o-ttl--color-primary"><?php echo get_sub_field('title'); ?></h3>
                  <p><?php echo get_sub_field('description'); ?></p>
                </div>

              <?php endwhile; wp_reset_postdata(); ?>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
					
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
