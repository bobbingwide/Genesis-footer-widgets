=== Genesis-footer-widgets ===
Contributors: bobbingwide
Donate link: http://www.oik-plugins.com/oik/oik-donate/
Tags: Genesis, footer, widgets, responsive
Requires at least: 4.4
Tested up to: 4.5.2
Stable tag: 0.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Responsive Footer Widgets for the Genesis theme framework 

* Supports footer with 3, 4 or 5 widget areas.
* Delivers CSS which makes the widget areas operate responsively.


Quite a few websites have footer areas which are populated with 3, 4 or 5 footer widgets displayed in columns, 
with all the widgets vying for a column wide enough to display their wares. 

Out of the box, the Genesis framework supports setting the number of widgets in the footer area. 
But it leaves it to the child theme developer to write the CSS to allow the footer widgets to be responsive.
More often than not, other than the initial layout - for window widths over 1000 pixels, the required behaviour is pretty much the same.

If you have multiple themes then it makes sense to use the same code for each of them, which suggests that the solution should be implemented as a plugin.

This is the plugin that will take on that role.

Note: When creating footers with multiple areas Genesis assumes you'll always have a widget in footer-1.
If you don't it doesn't populate any of the footer widgets.



== Installation ==
1. Upload the contents of the Genesis-footer-widgets plugin to the `/wp-content/plugins/Genesis-footer-widgets' directory
1. Activate the Genesis-footer-widgets plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I set the initial widths? =
In your theme's style.css

= What are the media query breakpoints? =

There are media queries for the following widths

tbc

== Screenshots ==
1. Genesis-footer-widgets in action

== Upgrade Notice ==
= 0.0.0 = 
Now supports 3 widget areas. Tested with WordPress 4.5.2

= 0.0.0 =
New plugin, available from GitHub oik-plugins.

== Changelog == 
= 0.0.1 =
* Added: Added gfw-3.css for 3 footer widgets [github bobbingwide genesis-footer-widgets issue 1]
* Tested: With WordPress 4.5.2 and WordPress MultiSite

= 0.0.0 =
* Added: New plugin [github bobbingwide genesis-footer-widgets issue 1]


