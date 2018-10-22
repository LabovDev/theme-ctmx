<?php

// Template Name: About

get_header(); ?>

<section id="content" class="wrap wrap--mxw" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc hero hero--about" style="background: url('<?php the_field('abt_hero_img'); ?>') top center/cover no-repeat;">
				<h1 class="hdln hdln hdln--prdName"><?php the_field('abt_hdln'); ?></h1>
					<h2 class="hdln hdln--featSub"><?php the_field('abt_hdlnSub'); ?></h2>
					<p class="txt txt--hero"><?php the_field('abt_hero_txt'); ?></p>
			</div> <!-- END .hero -->
		</header>

		<section class="wrap blocFeat blocFeat--full">
			<div class="bloc--100 blocFeat__cntnt">
				<p class="txt txt--abtLead"><?php the_field('abt_lead_txt'); ?></p>
			</div>
		</section>

		<section class="wrap blocFeat">
			<div class="bloc--50 blocFeat__cntnt">
				<h1 class="hdln hdln--feat"><?php the_field('abt_pnlhead_01'); ?></h1>
				<h2 class="hdln hdln--featSub"><?php the_field('abt_pnlsub_head_01'); ?></h2>					
				<p><?php the_field('abt_pnltxt_01'); ?></p>
				<a href="##" class="btn" id="abt1">More</a>
			</div>
			<div class="bloc--50 blocFeat__img">
				<?php 
					$image = get_field('abt_img_01');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>				
			</div>
			<div id="abtMore-01">
				<div class="bloc--100 blocFeat__more">
					<p><?php the_field('abt_pnltxt_01_more'); ?></p>
				</div>
			</div>				
		</section> <!-- END .blocFeatSplit -->
		
		<section class="wrap blocFeat blocFeat--full">
			<div class="bloc--100 blocFeat__img">
				<?php 
					$image = get_field('abt_img_02');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
			<div class="bloc--100 blocFeat__cntnt blocAbt__cntnt">
				<h1 class="hdln hdln--feat hdln--featFull"><?php the_field('abt_pnlhead_02'); ?></h1>
				<h2 class="hdln hdln--featSub hdln--featSubFull"><?php the_field('abt_pnlsub_head_02'); ?></h2>
				<p class="txt txt--feat txt--featFull"><?php the_field('abt_pnltxt_02'); ?></p>
				<a href="##" class="btn" id="abt2">More</a>					
			</div>
			<div id="abtMore-02">
				<div class="bloc--100 blocAbt__more">
					<p><?php the_field('abt_pnltxt_02_more'); ?></p>
				</div>
			</div>	
		</section>

		<section class="wrap blocFeat--alt">
			<div class="bloc--50 blocFeat__cntnt">
				<h1 class="hdln hdln--feat"><?php the_field('abt_pnlhead_03'); ?></h1>
				<h2 class="hdln hdln--featSub"><?php the_field('abt_pnlsub_head_03'); ?></h2>					
				<p><?php the_field('abt_pnltxt_03'); ?></p>
				<a href="##" class="btn" id="abt3">More</a>
			</div>
			<div class="bloc--50 blocFeat__img">
				<?php 
					$image = get_field('abt_img_03');
					if( !empty($image) ): ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>				
			</div>
			<div id="abtMore-03">
				<div class="bloc--100 blocFeat__more">
					<p><?php the_field('abt_pnltxt_03_more'); ?></p>
				</div>
			</div>				
		</section> <!-- END .blocFeatSplit -->
			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>