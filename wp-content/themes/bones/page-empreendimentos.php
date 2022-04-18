<?php
/*
 Template Name: Empreendimentos
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

 				<div class="c-enterprises">
          <div class="c-background c-background--white">
						<div class="o-wrapper o-wrapper--1280">
							<h2 class="o-ttl--title o-ttl--color-primary o-ttl--center">Empreendimentos em Andamento</h2>
							
              <?php echo do_shortcode('[ajax_load_more css_classes="c-enterprises__container" post_type="empreendimentos" posts_per_page="6" scroll="false" transition_container="false" button_label="Carregar mais"]'); ?>
						</div>
					</div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
