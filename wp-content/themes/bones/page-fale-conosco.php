<?php
/*
 Template Name: Fale conosco
*/
 ?>
 
 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="cf">

 		<main class="c-main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

      <section class="c-banner c-banner--contact" style="background: url('<?php echo get_field('banner_image'); ?>');">
        <div class="o-wrapper o-wrapper--1280">
          <div class="c-form">
            <?php echo do_shortcode('[contact-form-7 id="29" title="Contato"]'); ?>
          </div>

          <div class="c-contact__redes">
            <ul class="c-menu__redes">
              <?php echo get_template_part('partials/main-redes-menu'); ?>
            </ul>
          </div>
        </div>
      </section>

 		</main>

 	</div>

 </div>

 <?php get_footer(); ?>
