=== jQuery Image Lazy Load WP ===
Contributors: ayn
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: images, jquery, optimization
Requires at least: 2.8
Stable tag: 0.22.0

Retired on WordPress 5.5 and newer. Legacy jQuery image lazy loading remains available for older WordPress installations.

== Description ==

WordPress 5.5 introduced native image lazy loading, enabled by default without a settings change.

On WordPress 5.5 and newer this plugin does not modify images or enqueue frontend assets. Administrators see a notice that they can deactivate and delete the plugin. It respects any theme or plugin that disables core lazy loading.

On WordPress 2.8 through 5.4 the original jQuery implementation remains available. Upgrade old WordPress installations when possible. This release preserves the legacy implementation's existing limitations.

== Installation ==

1. Upload the plugin to your existing directory under /wp-content/plugins/.
2. On WordPress below 5.5, activate it from the Plugins screen.
3. On WordPress 5.5 and newer, deactivate and delete it instead.

After upgrading or deactivating, clear your page cache to remove any cached placeholder markup.

== Changelog ==

= 0.22.0 =

* Retire frontend processing on WordPress 5.5 and newer, where core provides native lazy loading.
* Show administrators a notice explaining that the plugin can be deactivated and deleted.
* Preserve legacy lazy loading on WordPress below 5.5.
* Fix the undefined class_attr variable notice reported in issue #7.
* Replace broken HTML changelog entries with readable Markdown and add regression tests.

= 0.21 =

* Skip content filtering in feeds.
* Historical release marked as tested with WordPress 4.0.

= Earlier releases =

See the [complete commit history](https://github.com/ayn/wp-jquery-lazy-load/commits/main/).

== Upgrade Notice ==

= 0.22.0 =

WordPress 5.5+ users can deactivate and delete this plugin. Older installations retain the legacy behavior. Clear page caches after updating.
