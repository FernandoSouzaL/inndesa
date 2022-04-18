<?php
/*
 Template Name: Home
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<section class="c-banner">
 				<div class="swiper-container js-home-slider">
 					<div class="swiper-wrapper">
 						<?php while( have_rows('banners') ) : the_row(); ?>

							<div class="swiper-slide c-banner--slider" style="background: url('<?php echo get_sub_field('banner_image'); ?>');">
								<?php 
									$title = get_sub_field('banner_title');
									if(!empty($title)): 
								?>
									<div class="c-banner__container">
										<div class="o-wrapper o-wrapper--1280">
											<h2 class="o-ttl o-ttl--47 o-ttl--white o-ttl--center o-ttl--semibold o-ttl--last"><?php echo $title; ?></h2>
										</div>
									</div>
								<?php endif; ?>
							</div>

 						<?php endwhile; wp_reset_postdata(); ?>
 					</div>
					<div class="swiper-pagination swiper-pagination-mobile"></div>
 					<div class="button-next">
					 	<svg width="18" height="34">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left" />
						</svg>
					 </div>
      		<div class="button-prev">
						<svg width="18" height="34">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left" />
						</svg>
					</div>
 				</div> 
 			</section>

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 				<div class="c-home">
					<div class="c-background c-background--white">
						<div class="o-wrapper o-wrapper--1280">
							<h2 class="o-ttl--title o-ttl--color-primary o-ttl--center">Destaques</h2>
							
							<div class="swiper-container c-enterprises__slider js-highlights-slider">
								<div class="swiper-wrapper">
									<?php 
										$args = array(
											'post_type' => 'empreendimentos',
											'order'			=> 'DESC',
											'tax_query'	=> array(
												array(
													'taxonomy' => 'categorias',
													'field'  	 => 'slug',
													'terms'		 => 'destaques' 
												)
											)
										);

										$query = new WP_Query( $args );

										while( $query->have_posts() ): $query->the_post();
									?>
										
										<div class="swiper-slide">
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
										</div>

									<?php endwhile; wp_reset_postdata(); ?>
									
								</div>
								<div class="swiper__container">
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>

					<img src="<?php echo get_field('banner_page'); ?>">

					<div class="c-background c-background--gray">
						<div class="o-wrapper o-wrapper--858">
							<div class="o-ttl--title-txt o-ttl--color-primary">
								<?php echo get_field('text'); ?>
							</div>
						</div>
					</div>

					<div class="c-background c-background--white">
						<div class="o-wrapper o-wrapper--1280">
							<h2 class="o-ttl--title o-ttl--color-primary o-ttl--center">Redes Sociais</h2>
						</div>
					</div>
				</div>

 			<?php endwhile; endif; ?>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
