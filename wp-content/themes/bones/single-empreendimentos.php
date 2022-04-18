<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="cf">

				<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

					<?php if (have_posts()) : ?> 
						
						<div class="c-single-enterprises">
							<?php while (have_posts()) : the_post(); ?>

								<section class="c-banner c-banner--page" style="background: url('<?php echo get_field('banner_image'); ?>');">
									<?php 
										$title = get_the_title();
										if(!empty($title)): 
									?>
										<div class="c-banner__container">
											<div class="o-wrapper o-wrapper--1280">
												<h2 class="o-ttl o-ttl--47 o-ttl--white o-ttl--center o-ttl--semibold o-ttl--last"><?php echo $title; ?></h2>

												<div class="c-single-enterprises__logo">
													<img src="<?php echo get_field('logo'); ?>" alt="<?php the_title(); ?>">
												</div>
											</div>
										</div>
									<?php endif; ?>
								</section>

								<div class="c-single-enterprises__top">
									<div class="o-wrapper o-wrapper--1380 c-background c-background--white c-background--secondary">
										<div class="c-single-enterprises__status">
											<?php $status = get_field('status'); ?>
											<h3 class="o-ttl o-ttl--25" style="color: <?php echo $status['color']; ?>;"><?php echo $status['text']; ?></h3>
										</div>

										<div class="c-single-enterprises__description o-ttl--title-txt">
											<h2><?php the_title(); ?></h2>
											<p><?php echo get_field('description'); ?></p>
										</div>

										<div class="c-single-enterprises__localization">
											<h2 class="o-ttl o-ttl--color-primary o-ttl--37 o-ttl--semibold">Informação que valorize a localização</h2>

											<div class="swiper-container js-localization-slider">
												<div class="swiper-wrapper">
													<?php while( have_rows('localization') ): the_row(); ?>

														<div class="swiper-slide">
															<div class="c-single-enterprises__block">
																<img src="<?php echo get_sub_field('icon'); ?>">
																<p><?php echo get_sub_field('text'); ?></p>
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
								</div>

								<div class="c-single-enterprises__container">
									<div class="c-single-enterprises__image">
										<img src="<?php echo get_field('image_info'); ?>">
									</div>

									<div class="c-single-enterprises__bg c-background c-background--gray">
										<h2 class="o-ttl--title">Mais informações</h2>

										<div class="c-single-enterprises__info">
											<?php while( have_rows('info') ): the_row(); ?>

												<div class="c-single-enterprises__block">
													<img src="<?php echo get_sub_field('icon_info'); ?>">
													<p><?php echo get_sub_field('text_info'); ?></p>
												</div>

											<?php endwhile; wp_reset_postdata(); ?>
										</div>

										<div class="c-single-enterprises__content o-ttl--title-secondary">
											<?php echo get_field('textarea'); ?>
										</div>
									</div>
								</div>
								
								<div class="c-background c-background--white">
									<div class="o-wrapper o-wrapper--1130">
										<div class="c-single-enterprises__container-2">
											<div class="o-ttl--title-txt">
												<?php echo get_field('spaces'); ?>
											</div>

											<ul class="c-single-enterprises__menu">
												<li class="c-single-enterprises__menu-item">
													<a href="#galeria" class="is-active js-current-enterprises">Galeria</a>
												</li>

												<li class="c-single-enterprises__menu-item">
													<a href="#plantas" class="js-current-enterprises">Plantas</a>
												</li>

												<li class="c-single-enterprises__menu-item">
													<a href="#tour" class="js-current-enterprises">Tour 360º</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="c-single-enterprises__slide is-active" id="galeria">
										<div class="swiper-container js-gallery-slider">
											<div class="swiper-wrapper">
												<?php $gallerys = get_field('gallery'); ?>

												<?php foreach( $gallerys as $gallery ): ?>

													<div class="swiper-slide">
														<img src="<?php echo esc_url($gallery['url']); ?>">
													</div>

												<?php endforeach; wp_reset_postdata(); ?>
											</div>
											<div class="swiper__container">
												<div class="swiper-pagination"></div>
											</div>
										</div>
									</div>

									<div class="c-single-enterprises__slide" id="plantas">
										<div class="swiper-container js-plants-slider">
											<div class="swiper-wrapper">
												<?php $plants = get_field('plants'); ?>

												<?php foreach( $plants as $plant ): ?>

													<div class="swiper-slide">
														<img src="<?php echo esc_url($plant['url']); ?>">
													</div>

												<?php endforeach; wp_reset_postdata(); ?>
											</div>
											<div class="swiper__container">
												<div class="swiper-pagination"></div>
											</div>
										</div>
									</div>

									<div class="c-single-enterprises__slide" id="tour">
											tour
									</div>
								</div>

								<img src="<?php echo get_template_directory_uri(); ?>/library/images/banner-page-empreendimento-2.jpg">

							<?php endwhile; ?>
						</div>

					<?php else : ?>

						<article id="post-not-found" class="hentry cf">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
								<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>

					<?php endif; ?>

				</main>

		</div>

	</div>

<?php get_footer(); ?>
