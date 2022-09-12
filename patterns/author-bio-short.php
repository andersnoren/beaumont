<?php
/**
 * Title: Short author bio.
 * Slug: beaumont/author-bio-short
 * Categories: beaumont
 */
?>
<!-- wp:media-text {"mediaType":"image","backgroundColor":"white"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile has-white-background-color has-background">
	<figure class="wp-block-media-text__media"><img
			src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/illustrations/author.png"
			alt="" /></figure>
	<div class="wp-block-media-text__content">
		<!-- wp:heading {"textAlign":"center","fontSize":"heading-5"} -->
		<h2 class="has-text-align-center has-heading-5-font-size">About the Author</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Shirley Beaumont is an american author of horror, thriller, supernatural and crime
			novels from Derry, Maine.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="#">Read More</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		<!-- wp:spacer {"height":"32px"} -->
		<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
</div>
<!-- /wp:media-text -->