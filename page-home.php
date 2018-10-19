<?php

// Template Name: Home

get_header(); ?>

<section id="content" class="wrap wrap--mxw" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header >
			<div class="bloc hero">
				<div class="hero__carousel">
					<?php echo do_shortcode('[metaslider id="50"]'); ?>
				</div> <!-- END .hero__carousel -->
			</div> <!-- END .hero -->
		</header>
			
			<section class="wrap heroNav">
				<section class="bloc--50 heroNav__sctn heroNav__sctn--01"><a class="link link--heroNav" href="###">About</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--02"><a class="link link--heroNav" href="###">Products</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--03"><a class="link link--heroNav" href="###">In-Stock Inventory</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--04"><a class="link link--heroNav" href="###">Service &amp; Parts</a></section>
			</section> <!-- END .heroNav -->
			
			<section class="wrap blocFeat">
				<div class="bloc--50 blocFeat__cntnt">
					<h1 class="hdln hdln--feat"><?php the_field('feat_head_01'); ?></h1>
					<h2 class="hdln hdln--featSub"><?php the_field('feat_sub_head_01'); ?></h2>
					<?php the_field('feat_txt_01'); ?>
					<a href="##" class="btn" id="feat1">Learn More</a>
				</div>
				<div class="bloc--50 blocFeat__img">
					<?php 
						$image = get_field('feat_img_01');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
				</div>
				<div id="featMore-01">
					<div class="bloc--100 blocFeat__more">
						<?php the_field('feat_txt_01_more'); ?>
					</div>
				</div>				
			</section> <!-- END .blocFeatSplit -->
			
			<section class="wrap blocFeat blocFeat--alt">
				<div class="bloc--50 blocFeat__img">
					<?php 
						$image = get_field('feat_img_02');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="bloc--50 blocFeat__cntnt">
					<h1 class="hdln hdln--feat"><?php the_field('feat_head_02'); ?></h1>
					<h2 class="hdln hdln--featSub"><?php the_field('feat_sub_head_02'); ?></h2>
					<?php the_field('feat_txt_03'); ?>
					<a href="##" class="btn" id="feat2">Learn More</a>
				</div>
				<div id="featMore-02">
					<div class="bloc--100 blocFeat__more">
						<?php the_field('feat_txt_02_more'); ?>
					</div>
				</div>					
			</section> <!-- END .blocFeatSplit -->
			
			<section class="wrap blocFeat blocFeat--full">
				<div class="bloc--100 blocFeat__img">
					<?php 
						$image = get_field('feat_img_03');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
				<div class="bloc--100 blocFeat__cntnt">
					<h1 class="hdln hdln--feat  hdln--featFull"><?php the_field('feat_head_03'); ?></h1>
					<h2 class="hdln hdln--featSub hdln--featSubFull"><?php the_field('feat_sub_head_03'); ?></h2>
					<p class="txt txt--feat txt--featFull"><?php the_field('feat_txt_03'); ?></p>
					<a href="##" class="btn" id="feat3">Learn More</a>					
				</div>
				<div id="featMore-03">
					<div class="bloc--100 blocFeat__more">
						<?php the_field('feat_txt_03_more'); ?>
					</div>
				</div>	
			</section>
			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>