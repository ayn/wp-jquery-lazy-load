# jQuery Image Lazy Load — retired

WordPress has included native image lazy loading since **5.5**. No setting is needed to enable the core default.

- **WordPress 5.5 and newer:** this plugin leaves images untouched and loads no frontend scripts or styles. Administrators see a notice explaining that it can be deactivated and deleted.
- **WordPress 2.8–5.4:** the original jQuery Lazy Load behavior remains available, with the undefined variable notice fixed. Older WordPress installations should upgrade.

If a theme or another plugin disables core lazy loading, this plugin does not override that choice.

## Upgrading

1. Update the plugin in its existing directory.
2. On WordPress 5.5+, deactivate and delete it from the Plugins screen.
3. Clear any page cache so previously generated placeholder markup is replaced.

No database migration or settings cleanup is required. On older WordPress, keep it active until WordPress is upgraded. The legacy implementation retains its original HTML parsing and browser limitations; it is not a modern performance solution.

## Development

Run the regression suite with PHP:

```sh
php tests/smoke.php
```

Tests cover the WordPress version boundary, frontend hook registration, administrator permissions, legacy image rewriting, and feeds. They use WordPress API stubs; they do not constitute full browser or WordPress installation tests.

See [CHANGELOG.md](CHANGELOG.md) and the [WordPress readme](readme.txt).

[WordPress core's native lazy-loading announcement](https://make.wordpress.org/core/2020/07/14/lazy-loading-images-in-5-5/).
