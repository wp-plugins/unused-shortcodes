=== Unused Shortcodes ===
Contributors: scott.deluzio
Tags: admin, shortcode, shortcodes, performance, code, plugin
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4CZMFDE6YG95L
Requires at least: 3.1.0
Tested up to: 4.0
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin to check to see if a shortcode is in use.

== Description ==
This plugin lets you enter a shortcode tag so that you can check to see if the shortcode is in use in a page or post on your site, and will display a list of pages or posts where the shortcode is in use.

Often times WordPress users will install a plugin to display some feature on their site. Usually these plugins will come with a [shortcode] to make displaying the content a little easier. Sometimes the plugin and shortcode works fine, but after a while you may find another plugin that works better, or simply decide that you don't want the feature any more.

If you were to deactivate the original plugin without removing its shortcodes from your site's pages or posts, you will end up with a lot of shortcode tags left over, which do nothing except for look funny on your site.

Figuring out which pages or posts have these shortcodes can be very time consuming.

With this plugin, you simply enter a shortcode tag and it will return a list of every page or post where that particular shortcode tag is being used. You can quickly jump to the edit page for those pages or posts to remove or edit the shortcode if you need to.

If you can't remember all the shortcodes you want to check, try the Edit Screen Shortcode Lister plugin (http://wordpress.org/plugins/shortcode-lister/) which will list out the shortcodes you have available to use on your site in the page or post edit screen. 

== Installation ==
1. Download archive and unzip in wp-content/plugins or install via Plugins - Add New.
2. Activate the plugin through the Plugins menu in WordPress.
3. View shortcode information under Settings > Unused Shortcodes.

== Frequently Asked Questions ==
= Will this plugin only display unused shortcodes? =
This plugin will let you know if any shortcode that you specify is in use on your site or not. If it is in use, the plugin will tell you what page or post is in use on. If it is not in use, it will simply tell you that the shortcode you entered in not in use.

= Will this plugin remove the shortcodes from my pages or posts? =
No, this plugin only identifies where the shortcodes are being used on your site. If your goal is to remove the shortcodes, you can edit each page/post manually. When you return to the Unused Shortcodes list, the page that you removed the shortcode from will no longer be listed.

If you want to find all the locations of a particular shortcode to update a setting, you can use this plugin to locate each page or post where the shortcode is in use.

= How do I use this plugin? =
Simply enter the shortcode tag that you are looking for.

For example, if you want to see if the shortcode [foo variable="bar"] is being used somewhere on your site, you would only enter the tag foo in the box. Do not enter the brackets [ ] or variables.

When you submit the form to check for the shortcode, it will store the shortcode you entered until you submit the form with a different shortcode. This way if you are working on updating a long list of pages or posts, you don't have to re-enter the shortcode everytime you come back to check the list.

= Can I translate this plugin? =
Sure! Once you have translated it, let me know and I'll be sure to get your translation included in the next update.

== Screenshots ==
1. Search for a shortcode. You can easily see if it is not in use on your site. screenshot-1.png
2. If the shortcode is in use, you can see a list of all the pages and posts where the shortcode is being used. Quick links are provided to let you view the live version of the page, or go straight to the edit screen to make your changes. screenshot-2.png

== Changelog ==
= 1.0.1 =
* Minor updates

= 1.0 =
* Initial release.

== Upgrade Notice ==
= 1.0.1 =
* Minor updates