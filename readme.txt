=== Plugin Name ===
Contributors: mailerlite
Donate link: http://example.com/
Tags: mailerlite, newsletter, subscribe, form, webform
Requires at least: 3.0.1
Tested up to: 3.9
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Official MailerLite sign up forms plugin for WordPress. Ability to embed MailerLite webforms and create custom ones just with few clicks.

== Description ==

= Official MailerLite WordPress plugin =

This plugin is a perfect solution for adding MailerLite subscribe form to your WordPress powered website. All you have to do is add a form title, description and press Save. This will create a simple form that collects emails and all other custom fields. Moreover it shows a confirmation message without refreshing the page.

== Installation ==

1. Upload `mailerlite` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enter your API key in MailerLite menu section

== Frequently Asked Questions ==

= Requirements =

* Requires PHP5.

= What is the plugin license? =

* This plugin is released under a GPL license.

= What is MailerLite? =
MailerLite is easy to use web-based email marketing software. It can help you create and send email newsletters, manage subscribers, track and analyze results.

= Do I need a MailerLite account to use this plugin? =
Yes, you can easily register at www.mailerlite.com

= How to display a form in posts or pages? =
Use shortcode with form id which you created [mailerlite form_id=0].

= How to display a form in widget areas like a sidebar? =
Just add "Mailerlite sign up form widget" and select form you have created

= How to display a form in my template files? =

Use the load_mailerlite_form($id) function.

`
<?php
if( function_exists( 'load_mailerlite_form' ) ) {
    load_mailerlite_form(0);
}
`

= How can I style the sign-up form? =

You can use CSS rules to style the sign-up form, use the following CSS selectors to target the various form elements.

Every form can be different, because element ID of form is:
`
#mailerlite-form_(your_form_id)
`

Elements of form can be styled.

`
.mailerlite-form .mailerlite-form-title {} /* the form title */
.mailerlite-form .mailerlite-form-description {} /* the form description */
.mailerlite-form .mailerlite-form-field label {} /* the form input label */
.mailerlite-form .mailerlite-form-field input {} /* the form inputs */
.mailerlite-form .mailerlite-form-loader {} /* the form loading text */
.mailerlite-form .mailerlite-subscribe-button-container {} /* the form button container */
.mailerlite-form .mailerlite-subscribe-button-container .mailerlite-subscribe-submit {} /* the form submit button */
.mailerlite-form .mailerlite-form-response {} /* the form response message */
`

Add your custom CSS rules to the end of your theme stylesheet, /wp-content/themes/your-theme-name/style.css. Do not add them to the plugin stylesheet as they will be automatically overwritten on the next plugin update.

= Where can I find my MailerLite API key? =
Check it here!

== Screenshots ==

1. screenshot-1.jpg
2. screenshot-2.jpg
3. screenshot-3.jpg
4. screenshot-4.jpg
5. screenshot-5.jpg
6. screenshot-6.jpg


== Changelog ==

= 1.0 =
* First release

== Upgrade Notice ==

= 1.0 =
* First release

== Arbitrary section ==
