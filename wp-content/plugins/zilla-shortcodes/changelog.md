# Zilla Shortcodes Changelog

2014-12-15 **v2.0.2** Nic Oliver <nic@themezilla.com>

- Updated column CSS so all columns are full width on small screens.
- Revised changelog to standard formatting.


2014-10-28 **v2.0.1** Themezilla

- Minor bug fix (line 293) of undefined index in includes/class-tzsc-admin-insert.php

2014-05-02 **v2.0** Themezilla

- This update removes reliance on tinymce to be compatible with WordPress 3.9.
- Shortcodes will be added via an "Add Shortcode" button above the content editor.
- Column shortcode updated to be simpler.

- zilla-shortcodes.php: remove tinymce references
- [New] assets/
- [New] assets/css/
- [Moved] assets/css/admin-css: styles the admin interface
- [Moved] assets/css/shortcodes.css: styles the shortcodes, updated styles for current browser requirements
- [New] includes/
- [New] includes/class-tzsc-admin-insert.php: primary file creating the admin interface for adding shortcodes to editor
- [Moved] includes/config.php: defines shortcode params
- [Moved] includes/shortcodes.php: added new simpler zilla_column shortcake
- [Removed] tinymce

2013-11-25 **v1.2** Themezilla

- zilla-shortcode-lib.js: refresh accordion on activate and window resize

2012-12-13 **v1.1** Themezilla

- shortcodes.css: fix width on 4/5 column and update tabs selectors for new UI in WP 3.5
- zilla-shortcodes.php: update version number
- shortcodes.php: update tabs to work with STATIC ids that will be consistant across pages
- zilla-shortcodes-lib.js: fix tabs JS call

2012-05-08 **v1.0** Themezilla

- Initial release

