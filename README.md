![Search Placeholder Avada Hero Banner](https://ps.w.org/search-placeholder-avada/assets/banner-1554x500.jpg)

# Search Placeholder Avada

Contributors: mark l chaves

Donate link: https://ko-fi.com/marklchaves

Tags: wordpress,avada,search,placeholder

Requires at least: 5.3.2

Tested up to: 5.8.1

Stable tag: 2.0.0

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

---

**Allows you to customise the search box placeholder text for Avada.**

## Description

The official version is now available on [WordPress.org](https://wordpress.org/plugins/search-placeholder-avada/
).

## Installation

1. Use the wp-admin > **Plugins > Add New** to upload the zip or manually upload the **contents** of the zip file to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress. The plugin is now available in wp-admin > **Settings** menu.

## Frequently Asked Questions

**There will be an FAQ for the official release.**

## Screen Captures

![Where to Find Plugin](https://ps.w.org/search-placeholder-avada/assets/screenshot-4.png "Where to find the plugin")

![Settings Page](https://ps.w.org/search-placeholder-avada/assets/screenshot-5.png "Settings page")

![Result](https://ps.w.org/search-placeholder-avada/assets/screenshot-1.png "Example result")

![Result](https://ps.w.org/search-placeholder-avada/assets/screenshot-2.png "Example result")

---

## Version 2.0

Version 2.0 will have built-in support for WordPress' Twenty Twenty themes and filter support for adding custom CSS selectors for any search input field.

### In Beta for version 2.0

```php
/** Search Placeholder Avada: filter for you own CSS selector */

add_filter( 'search_placeholder_css_selectors', function() {
		return ".this-is-a-test-class, #this-is-a-test-id, .another-class";
	}
);
```

---

## Version Notes

- Added code to delete placeholder option from the DB on plugin uninstall.
- Tested on WordPress 5.8 and Avada 7.3.

---

## I'll Drink to That ;-)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/D1D7YARD)

