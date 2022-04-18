			<footer class="c-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="o-wrapper o-wrapper--1280">

					<div class="c-footer__container">
						<div class="c-form">
							<?php echo do_shortcode('[contact-form-7 id="29" title="Contato"]'); ?>
						</div>
	
						<ul class="c-menu__redes">
							<?php echo get_template_part('partials/main-redes-menu'); ?>
						</ul>
					</div>

					<div class="c-footer__content">
						<div class="c-footer__logo">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logotipo.png" alt="Inndesa incorporadora">
						</div>

						<div class="c-footer__menu">
							<ul class="c-menu__footer">
								<?php echo get_template_part('partials/main-footer-menu'); ?>
							</ul>
	
							<p class="c-footer__copyright o-ttl o-ttl--white o-ttl--14 o-ttl--center">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. Todos os direitos reservados. <a href="http://ondaweb.com.br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ondaweb-ico-white.png" /></a></p>
						</div>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php include get_template_directory() . '/partials/svgs.php' ?>

		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
