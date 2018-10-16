<?php

// Template Name: Product

get_header(); ?>

<section id="content" class="wrap wrap--mxw" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<div class="bloc fixHeight" style="background: url('<?php bloginfo('url'); ?>/wp-content/themes/theme-ctmx/img/fpo__hero_02.jpg') top center/contain no-repeat;">
				<div>
					<h1 class="hdln hdln--prdName"><?php the_field('prd_name'); ?></h1>
				</div>
			</div> <!-- END .heroImg -->
			<div class="heroContent">
				<h2 class="hdln hdln--prdtag"><?php the_field('prd_tag'); ?></h2>
				<h3 class="hdln hdln--prdDesc"><?php the_field('prd_desc'); ?></h3>
				<p class="txt txt--heroGen"><?php the_field('prd_desc_ext'); ?></p>
			</div> <!-- END .heroContent -->
		</header>
		
		<section class="wrap blocFeat">
			<div class="bloc--50 blocFeat__cntnt">
				<h1 class="hdln hdln--feat"><?php the_field('prd_over_hdln'); ?></h1>
				<h2 class="hdln hdln--featSub"><?php the_field('prd_over_hdln_sub'); ?></h2>
				<p class="txt txt--feat"><?php the_field('prd_over_txt'); ?></p>
			</div>
			<div class="bloc--50 blocFeat__img">
				<?php $image = get_field('prd_over_img');
					if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif; ?>
			</div>
		</section> <!-- END .blocFeat -->
		
		<section class="wrap blocUsps">
			<?php if( have_rows('prd_usps') ): ?>
			<?php while( have_rows('prd_usps') ): the_row(); 
				// vars
				$title = get_sub_field('prd_usp_title');
				$txt = get_sub_field('prd_usp_txt');
			?>
			<div class="bloc bloc--50 bloc__singleUsp">
				<h1 class="hdln hdnl--usp"><?php echo $title; ?></h1>
				<p class="txt txt--usp"><?php echo $txt; ?></p>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</section> <!-- END .blocUsps -->
		
		<section class="wrap blocGall">
			<?php 
				$images = get_field('prd_gall');
				if( $images ): ?>
				    <ul class="blocGall__list">
				        <?php foreach( $images as $image ): ?>
				            <li class="blocGall__item">
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="fancybox"/>
				                </a>
				                <p class="txt txt--galCap"><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				<?php endif; ?>
		</section> <!-- END .blocGall -->
		
		<section class="wrap blocCta">
			<a href="###" class="btn btn--prd">Download Brochure PDF</a>
			<a href="###" class="btn btn--prd btn--dark">Contact Us About This Mixer</a>
		</section> <!-- END .blocCta -->
		
		<section class="wrap blocSpecs">
			<h1 class="hdln hdln--specs" >Specifications</h1>
			<?php if( have_rows('specs') ): ?>
			<div class="bloc bloc__specs">
				<table class="prdSpecs">
					<?php while( have_rows('specs') ): the_row(); 
						// vars
						$feature = get_sub_field('spec_feat');
						$value = get_sub_field('spec_val');
					?>
					<tr class="prdSpecs__row">	
						<td class="txt txt--specVal"><?php echo $feature ?></td>
						<td class="txt txt--specVal"><?php echo $value ?></td>
					</tr>
					<?php endwhile; ?>
				</table>
			</div>
			<?php endif; ?>
		</section> <!-- END .blocSpecs -->
			
	</article>

	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>