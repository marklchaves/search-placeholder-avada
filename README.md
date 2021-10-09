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

**Allows you to customise the search box placeholder text for Avada, Twenty Twenty-One, and beyond.**

## Description

The official version is now available on [WordPress.org](https://wordpress.org/plugins/search-placeholder-avada/
).

## Installation

1. Use the wp-admin > **Plugins > Add New** to upload the zip or manually upload the **contents** of the zip file to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress. The plugin is now available in wp-admin > **Settings** menu.

## Frequently Asked Questions

### Will this plugin work for other themes?

**Yes!**

Version 2.0.0 has built-in support for Avada and WordPress default themes. 

It also has new [PHP filter hook](#version-20) for you to add any CSS selectors. That means Search Placeholder Avada can work for any theme :-)

## Screen Captures

![Where to Find Plugin](https://ps.w.org/search-placeholder-avada/assets/screenshot-4.png "Where to find the plugin")

![Settings Page](https://ps.w.org/search-placeholder-avada/assets/screenshot-5.png "Settings page")

![Result](https://ps.w.org/search-placeholder-avada/assets/screenshot-1.png "Example result")

![Result](https://ps.w.org/search-placeholder-avada/assets/screenshot-2.png "Example result")

---

## Version 2.0

Version 2.0 has built-in support for WordPress' Twenty Twenty themes and filter support for adding custom CSS selectors for any search input field.

### Example Filter

```php
/** Search Placeholder Avada: filter for your own CSS selectors. Separate selectors with a comma. */

add_filter( 'search_placeholder_css_selectors', function() {
		return ".this-is-a-test-class, #this-is-a-test-id, .another-class";
	}
);
```

---

## Version Notes

- Added built-in support for WordPress' Twenty Twenty themes.
- Added filter for custom CSS selectors for any search input field.
- Tested on Avada 7.4.2, Twenty Twenty-One, and WordPress 5.8.1.

---

## I'll Drink to That ;-)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/D1D7YARD)

