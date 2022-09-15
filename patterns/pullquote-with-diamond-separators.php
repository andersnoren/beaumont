<?php
/**
 * Title: Wide pullquote with diamond separators.
 * Slug: beaumont/pullquote-with-diamond-separators
 * Categories: beaumont
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"64px","margin":{"top":"64px","bottom":"64px"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:64px;margin-bottom:64px">
	<!-- wp:separator {"className":"is-style-beaumont-diamond"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-beaumont-diamond" />
	<!-- /wp:separator -->

	<!-- wp:group -->
	<div class="wp-block-group">
		<!-- wp:pullquote {"style":{"typography":{"letterSpacing":"-0.01em"}}} -->
		<figure class="wp-block-pullquote" style="letter-spacing:-0.01em">
			<blockquote>
				<p><em>"Whatever walked there, walked alone."</em></p>
			</blockquote>
		</figure>
		<!-- /wp:pullquote -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-beaumont-diamond"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-beaumont-diamond" />
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->