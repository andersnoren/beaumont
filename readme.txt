=== Beaumont ===
Contributors: Anlino
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=anders%40andersnoren%2ese&lc=US&item_name=Free%20WordPress%20Themes%20from%20Anders%20Noren&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Requires at least: 6.0
Requires PHP: 5.6
Tested up to: 6.0
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


== Installation ==

1. Make sure you're running WordPress 6.0 or later.
2. Upload the theme.
3. Activate the theme.


== Licenses ==

Beaumont is derived from the Davis Blocks theme, Copyright (c) 2022 Anders Norén.
Davis Blocks is distributed under the terms of the GNU GPL version 2.0.

Beaumont bundles the following third-party resources:

Albert Sans font
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://fonts.google.com/specimen/Albert+Sans

STIX Two Text font
License: SIL Open Font License, 1.1, https://opensource.org/licenses/OFL-1.1
Source: https://fonts.google.com/specimen/STIX+Two+Text

author.png skull with crown image
License: Public Domain
Source: https://svgsilh.com/image/1299051.html


== Changelog ==

Version 0.1.8 (2022-10-07)
-------------------------
- Query Loop: Better fix for the spacing between list items when running WP 6.1 or the Gutenberg plugin.
- Removed index.php, since it's no longer needed to pass the WordPress.org automatic theme review.

Version 0.1.7 (2022-09-27)
-------------------------
- Included a couple more instances of "theme":"beaumont" that I missed in 0.1.6.
- Query Loop: Fixed the spacing between list items when running WP 6.1 or the Gutenberg plugin.

Version 0.1.6 (2022-09-27)
-------------------------
- Updated <!-- wp:template-part --/> to omit the "theme":"beaumont" code, fixing issues when modifying template parts in child themes (thanks, @janboddez).

Version 0.1.5 (2022-09-15)
-------------------------
- Updated the style.css theme description with mention of the different blog archive designs.
- Added three more designs for the blog archive (loop template part) using the Cover block:
	- Loop (Cover)
	- Loop (Cover Full Width)
	- Loop (Grid with Cover Images)

Version 0.1.4 (2022-09-14)
-------------------------
- Adjusted the default spacing of pull quotes to work better with left/right aligned blocks.
- Set -webkit-appearance to none on inputs and buttons, fixing mobile display.
- Updated style.css with a Theme URI, and the theme description with a link to the demo site.
- Cleaned up style.css.
- Theme.json:
	- Added block settings for core/code.
	- Updated heading margins to match blockGap overrides in style.css.
- New block patterns:
	- Paragraph with a pull quote aligned to the left.
	- Paragraph with a pull quote aligned to the right.
	- Paragraph with drop cap.
	- Wide pullquote with diamond separators.

Version 0.1.3 (2022-09-14)
-------------------------
- Bumped the minimum font size of body text by one pixel, to improve readability on mobile.
- Improved the style of the query pagination style when there's only one link.
- Added a gap between Post Title and Post Date in the Loop template parts, and the front page Query Loop. 
- Fixed the Query Pagination not being hidden when :empty due to extra whitespace in the template part markup.

Version 0.1.2 (2022-09-13)
-------------------------
- Vertically center the timestamp in the "Loop (List with image)" template part.
- Fixed a search and replace gone wrong on the 404 template.

Version 0.1.1 (2022-09-13)
-------------------------
- Added the "no-shrink" classname to the Post Date block in the loop on front-page.html, preventing it from having line breaks.
- CSS cleanup.

Version 0.1 (2022-09-12)
-------------------------