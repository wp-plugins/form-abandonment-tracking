=== Form Abandonment Tracking ===
Contributors: downtownrob
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=R4SE22RQ4CB2E
Tags: form abandonment tracking, form tracking, field level tracking, google analytics, universal analytics
Requires at least: 2.9
Tested up to: 4.2.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Tracks form abandonment to the form field level as Google and Universal Analytics events, including Submits.

== Description ==

Tracks form abandonment to the form field level as Google Analytics events, including Submits. Each form will be tracked using it's ID, with each field using it's name, and each change of the field focus fires an event to Google Analytics tracking whether the field was empty (skipped) or not (completed). Submit is tracked as a separate event as well. In Google Analytics, these events will generate stats on number of fields completed, number skipped, and submits, with percentages, for each form on your web site.

The javascript is loaded into the footer of the site, and uses jQuery to detect the form field focus change, and requires that the Google Analytics (ga) and/or Universal Analytics (ua) code is already added to the site somehow.

If this plugin saved you time, please send a [donation](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=R4SE22RQ4CB2E) with an amount you feel your time is worth, to ensure continued support and encourage future development.

Feel free to submit a [rating and review](http://wordpress.org/support/view/plugin-reviews/form-abandonment-tracking?rate=5#postform), I'd really appreciate your feedback.

Wish it did something else as well? Use the [Support](http://wordpress.org/support/plugin/form-abandonment-tracking) tab to submit your thoughts.


== Installation ==

Go to Plugins -> Add New, search for the name of the plugin, and then find it in the list, and click Install Now.

Or use the old manual upload method:

1. Click the Upload option. Choose the plugin zip file you downloaded. Click the Upload button.
2. Activate the plugin.
3. Set the plugin options, if desired.

== Frequently Asked Questions ==

= FAQs =

Does it support both the older/original Google Analytics tracking code, and the new Universal Analytics tracking code?

Yes, now it does.

== Screenshots ==

1. Form Names as Event Categories in GA
2. Form Names with Form Field Stats in GA
3. Form Field Level Stats in GA
4. Form Field Stats per Form Shown in GA

== Changelog ==

= 1.2 =
Updated to include support for Yoast's new Universal Analytics prefix, as well as original, and commented out console log output debugging.

= 1.1 =
Updated to include support for Universal Analytics, and fix a bug in tracking submits.

= 1.0 =
* First release. Yay. Hi Mom. ;)