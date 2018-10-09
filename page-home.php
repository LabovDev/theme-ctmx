<?php

// Template Name: Home

get_header(); ?>

<section id="content" class="wrap wrap--mxw" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header >
			<div class="bloc hero">
				<div class="hero__bckgrndImg">
					<h1 class="hdln hdln--hero">Manufacturing <span class="hdln--heroBig">Mettle</span></h1>
					<div class="hero__caption">
						<h2 class="hdln hdln--heroSub">Committed to you. Committed to the future.</h2>
						<p class="txt txt--hero">As a dynamic and agile company, led by experienced operators in the mixer industry, Continental continues to invest in its facilities, product, processes and people. Taken together, these investments underscore the company&rsquo;s commitment to serve its customers.</p>
					</div>
				</div> <!-- END .hero__cntnt -->
				<div class="hero__carousel">
					<?php echo do_shortcode('[metaslider id="50"]'); ?>
				</div> <!-- END .hero__carousel -->
			</div> <!-- END .hero -->
		</header>
			
			<section class="wrap heroNav">
				<section class="bloc--50 heroNav__sctn heroNav__sctn--01"><a class="heroNav__link" href="###">About</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--02"><a class="heroNav__link" href="###">Products</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--03"><a class="heroNav__link" href="###">In-Stock Inventory</a></section>
				<section class="bloc--50 heroNav__sctn heroNav__sctn--04"><a class="heroNav__link" href="###">Service &amp; Parts</a></section>
			</section> <!-- END .heroNav -->
			
			<section class="wrap blocFeat">
				<div class="bloc--50 blocFeat__cntnt">
					<h1 class="hdln hdln--feat">The headline will go here and look like this.</h1>
					<h2 class="hdln hdln--featSub">The sub-headline will go here and look like this.</h2>
					<p class="txt txt--feat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam metus sapien, aliquam eget odio et, vestibulum hendrerit turpis. In sit amet porta turpis, quis varius metus. Sed ac suscipit neque, sit amet tincidunt dolor.</p>
					<a href="###" class="btn">Learn More</a>
				</div>
				<div class="bloc--50 blocFeat__img">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/img/fpo_feat_01.jpg" alt="fpo_feat_01" width="800" height="600" />
				</div>
			</section> <!-- END .blocFeatSplit -->
			
			<section class="wrap blocFeat blocFeat--alt">
				<div class="bloc--50 blocFeat__img">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/img/fpo_feat_02.jpg" alt="fpo_feat_02" width="800" height="600" />
				</div>
				<div class="bloc--50 blocFeat__cntnt">
					<h1 class="hdln hdln--feat">The headline will go here and look like this.</h1>
					<h2 class="hdln hdln--featSub">The sub-headline will go here and look like this.</h2>
					<p class="txt txt--feat">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam metus sapien, aliquam eget odio et, vestibulum hendrerit turpis. In sit amet porta turpis, quis varius metus. Sed ac suscipit neque, sit amet tincidunt dolor.</p>
					<a href="###" class="btn">Learn More</a>
				</div>
			</section> <!-- END .blocFeatSplit -->
			
			<section class="wrap blocFeat blocFeat--full">
				<div class="bloc--100 blocFeat__img">
					<img src="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/img/fpo_feat_full_01.jpg" alt="fpo_feat_full_01" width="1440" height="500" />
				</div>
				<div class="bloc--100 blocFeat__cntnt">
					<h1 class="hdln hdln--feat  hdln--featFull">The headline will go here and look like this.</h1>
					<h2 class="hdln hdln--featSub hdln--featSubFull">The sub-headline will go here and look like this.</h2>
					<p class="txt txt--feat txt--featFull">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam metus sapien, aliquam eget odio et, vestibulum hendrerit turpis. In sit amet porta turpis, quis varius metus. Sed ac suscipit neque, sit amet tincidunt dolor.</p>
					<a href="###" class="btn">Learn More</a>					
				</div>
			</section>
			
		</div> <!-- END .wrap--mxw -->
	</article>

	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>