<div class="wrap">
	<div class="postbox">
		<h2><?php _e('Unused Shortcodes', 'unused_sc_lang'); ?></h2>
		<p><?php _e('Enter a shortcode tag in the box below.', 'unused_sc_lang'); ?></p>
		<p><strong><?php _e('Do not enter any brackets or variables.', 'unused_sc_lang'); ?></strong></p> 
		<p><?php _e('For example, if you want to see if the shortcode [foo variable="bar"] is being used somewhere on your site, you would only enter the tag', 'unused_sc_lang'); ?> <strong><?php _e('foo', 'unused_sc_lang'); ?></strong> <?php _e('in the box below. Do not enter the brackets [ ] or variables.', 'unused_sc_lang'); ?></p>
		<form method='post' action='options.php'>
			<?php wp_nonce_field( 'update-options' ); ?>
			<?php settings_fields( 'unused_shortcodes_group' ); ?>
			<input id="shortcode" type="text" size="36" name="find_shortcode" value="<?php echo get_option('find_shortcode'); ?>" /> <input type="hidden" name="action" value="update" /><?php submit_button('Check Shortcode'); ?>
		</form>
		<p><?php echo do_shortcode("[unusedshortcodes find='" . get_option('find_shortcode') . "']"); ?></p>
	</div>
	<div class="postbox">
		<p><?php _e('If this plugin has helped you out at all, please consider making a donation to encourage future updates.<br />Your generosity is appreciated!', 'unused_sc_lang'); ?></p>
			<a href="#" onclick="window.open('https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4CZMFDE6YG95L');">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" width="147" height="47">
			</a>
		<p><?php _e('To report any issues with', 'unused_sc_lang'); ?> <strong><?php _e('this plugin', 'unused_sc_lang'); ?></strong><?php _e(', please visit the ', 'unused_sc_lang'); ?><a href="http://wordpress.org/support/plugin/unused-shortcodes"><?php _e('support page on WordPress.org', 'unused_sc_lang'); ?></a>.</p>
		<p><?php _e('For all other WordPress support, please check out the following', 'unused_sc_lang'); ?> <a href="https://surpriseazwebservices.com/services/wordpress-site-install/"><?php _e('WordPress site set-up', 'unused_sc_lang'); ?></a>, <a href="https://surpriseazwebservices.com/services/wordpress-maintenance-support/"><?php _e('WordPress support', 'unused_sc_lang'); ?></a><?php _e(', and other', 'unused_sc_lang'); ?> <a href="https://surpriseazwebservices.com/services/"><?php _e('WordPress training', 'unused_sc_lang'); ?></a> <?php _e('services', 'unused_sc_lang'); ?>.</p>
		<p><a href="https://twitter.com/SurpriseWebSvc" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @SurpriseWebSvc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
	</div>
</div>