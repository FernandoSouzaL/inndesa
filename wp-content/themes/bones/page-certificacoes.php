<?php
/*
 Template Name: Certificacoes
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

 				<div class="c-certifications">
					<div class="c-background c-background--white">
						<div class="o-wrapper o-wrapper--1280">
							<h2 class="o-ttl--title o-ttl--center">Certificações</h2>

							<div class="c-certifications__text o-wrapper o-wrapper--858">
								<p><?php echo get_field('text'); ?></p>
							</div>

							<div class="c-certifications__container">
								<?php $count = 1; while( have_rows('certifications') ): the_row(); ?>

									<div class="c-certifications__block">
										<a href="#js-current-<?php echo $count; ?>" class="js-certifications-current">
											<img src="<?php echo get_sub_field('image'); ?>">
										</a>
									</div>

								<?php $count++; endwhile; wp_reset_postdata(); ?>
							</div>

							<div class="c-certifications__content">
								<?php $count = 1; while( have_rows('certifications') ): the_row(); ?>

									<div class="c-certifications__description" id="js-current-<?php echo $count; ?>">
										<?php echo get_sub_field('description'); ?>
									</div>

								<?php $count++; endwhile; wp_reset_postdata(); ?>
							</div>
					  </div>
					</div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
