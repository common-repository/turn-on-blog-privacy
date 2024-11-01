=== Turn on Blog Privacy ===
Contributors: blobaugh, freshmuse
Tags: privacy, multisite, enable privacy
Requires at least: 3.0
Tested up to: 4.8
Stable tag: trunk

Globally alters the site visibility settings to "Ask search engines not to index this site" when enabled. Upon deactivation it selects "Allow search engines to index this site" Multisite compatible

== Description ==

If you have a public development site and desire for bots and crawlers not to visit your site until it is considered production this plugin can help you by
automagically settings the site to private.

This Multisite compatible plugin will detect whether your site is running a single install or a multisite install of WordPress and react accordingly.

When you enable this plugin it sets the site option for whether or not the site should tell search engines and other crawlers not to index the site. 
Upon activations bots will be asked not to crawl the site (Note: this is not a 100% solution, bots may ignore this directive, though most search engines honor it).

When this plugin is deactivated the privacy setting will be turned off and bots will be freely allowed to crawl the website again.

NOTE: Due to how WordPress Multisite handles network wide plugin activation you will currently need the Proper Network Activation plugin if you wish to turn on privacy immediately when enabling this plugin.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does this stop all bots/crawlers from indexing my site? =

No. All this plugin does is enable the built-in WordPress privacy setting. This settings politely asks bots not to index the site, however they are free to ignore
the directive and index the site anyways. In most cases bots will honor the directive and not crawl the website. Search engines, such as Google and Bing honor this.


== Changelog ==

= 1.1 =
* Verified working with WP 4.4.1

= 1.0 =
* First version of the plugin
