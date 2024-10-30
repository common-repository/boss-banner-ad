=== Boss Banner Ad ===
Contributors: kaser
Donate link: http://cssboss.com/donate
Tags: banner, image link, advertisement, widget, post, shortcode, posts
Requires at least: 3.5.2
Tested up to: 3.5.2
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Put A Banner image any where you want with ease!

== Description ==

This pluging simply allows you to link an image together with out the knowledge of html and simply be able to put the code where ever you want your image to show up.

* you can use it in a widget area
* you can use it in any area that accepts shortcodes
* you can even put it right into the template file itself!

== Installation ==

Here is how you work the Boss-Banner-Ad plugin

1. Upload the plugin folder boss_banner_ad to the wordpress plugins folder so it looks like /wp-content/plugins/boss_banner_ad/boss_banner_ad.php
2. Activate the plugin through the 'Plugins' menu in WordPress
3. For the template tag you need to supply a list of attributes in this order : ( $image, $link, $target, $alt, $width, $height, $nofollow ), example: <?php boss_banner('images/cssboss_logo.png','cssboss.com','newwindow','CSSBoss.com is the best','100','100','nofollow'); ?>
4. For the widget, simply drag and drop the widget into a sidebar, and configure the attributes to how you'd like. 
5. For the shortcode, simply put [banner_ad link="http://www.cssboss.com" image="http://cssboss.com/wp-content/uploads/2012/02/cssbosslogo.png" width="100" height="100" newwindow="yes" alt="CSSBoss.com is the best!" nofollow="yes"]

== Frequently Asked Questions ==

= what does the template tag mean? =

you call the function of my plugin, banner_ad(), and supply 7 bits of data. The url to the image, the url you want the image to link to, the width of the image, the height of the image, the alt text, new window (yes or no), and nofollow (yes or no) .

= does this plugin automatically generate the tags for you? =

Not in version 1.1... not yet ;)

== Screenshots ==

1. This is the widget control panel of the Boss Banner Ad plugin

== Changelog ==
= 2.0 =
added alt, target and nofollow attributes to use for the widget, template tag, and shortcode. 

= 1.0 =
* Initial Release. May 4th 2012.