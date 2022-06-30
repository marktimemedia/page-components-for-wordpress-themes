# ACF Page Components For WordPress

## NOTE: This is an older plugin that I will eventually be phasing out in favor of my [ACF Block Components](https://github.com/marktimemedia/acf-component-blocks) plugin

Page builder plugin for WordPress that adds custom page templates to your theme for displaying custom content types and building single-scroll multipages. **Requires [Advanced Custom Fields Pro](http://advancedcustomfields.com/pro), [ACF Term and Taxonomy Chooser](https://github.com/marktimemedia/acf-term-and-taxonomy-chooser), [ACF Post Type Selector](https://github.com/TimPerry/acf-post-type-selector) and [ACF Widget Area Field](https://wordpress.org/plugins/advanced-custom-fields-widget-area-field/)**. Recommended for use with [ACF Options Page](https://github.com/marktimemedia/acf-theme-settings) and [Pink Spring Theme](https://github.com/marktimemedia/pink-spring). Also compatible with [ACF Block Components](https://github.com/marktimemedia/acf-component-blocks).

Works with most standard WordPress themes, including Roots/Sage based themes with no theme wrapper.

### New Content Fields

##### Modular Content (Flexible Fields)
1. Single Column Content with heading
2. Dual Column Content with heading
3. Content with Callout and heading
4. Hero Image with text and call to action buttons
5. Video/Embedded Media with text and call to action buttons
6. Slider with text and links
7. Feature Boxes (post content, latest post, or manual)
8. Call to Action with heading, subheading, buttons
8. Logo Feature with image/link repeater
9. Widget Area
10. Post List
11. Post Grid
12. Manual List
13. Manual Grid
14. Tabs
15. Gallery (using WordPress Gallery)

##### Landing Page Builder
###### Standard Page
1. Buttons – Add a row of call to action buttons
2. Background Image – Add a full sized background image
3. Feature Boxes – Custom feature boxes of manual or selected post content

###### News Page
1. Featured Story - manual or automatic
2. Topics - archives for specific topics

###### Page Components
1. Standard Content (nothing added)
2. List Archive – displays either a manually curated list of items, or a list of the most recent from a specific taxonomy
3. Grid Archive – displays either a manually curated grid of items, or a grid of the most recent items from a specific taxonomy
4. Tabs – displays title and tab fields
5. Call to Action – displays a custom CTA button
6. Extra Content – displays extra WYSIWYG editor content


Both landing pages have option for Single Scroll Page – Build a long page out of multiple Page Component pages to create a unique site


### Vague Description of How To Use
1. Install and activate the plugin
2. To build a standard page, select the Page Template called "Landing Page Builder" and choose "Standard" under Landing Page Type to enable the special landing page functionality (like buttons and feature boxes) and single-scroll page builder using Components pages.
3. To build a news-style page, select the Page Template called "Landing Page Builder" and choose "News" under Landing Page Type to enable the news page functionality (like featured story and topics) and single-scroll page builder using Components pages.
4. To use extra fields on Pages, select the Page Template called "Page Components" (makes them compatible with single-scroll page as well)
5. For modular content, select the Page Template called "Modular Content Page" to enable the flexible content fields


### Vague Description of How To Theme
1. Create a folder called `mtm-templates` in the root of your theme or child theme
2. Copy any of the template parts in the plugin `templates` folder into your `mtm-templates` folder, and modify/style them at will. The plugin will automatically override them.
3. To call any of the custom template parts from another part of your theme, use the `mtm_get_template_part()` function


### Screenshots

##### Single Scroll Page Field Samples

![Home 1](screenshots/home-1.png)

![Home 2](screenshots/home-2.png)

![Home 3](screenshots/home-3.png)

![Home 4](screenshots/home-4.png)

![Home 5](screenshots/news-1.png)


##### Page Component Field Samples

![Component 1](screenshots/component-1.png)

![Component 2](screenshots/component-2.png)


##### Modular Page Field Samples

![Module 1](screenshots/module-1.png)

![Module 2](screenshots/module-2.png)

##### Theme Demo

In use with [Pink Spring Theme](https://github.com/marktimemedia/pink-spring) and [ACF Options Page](https://github.com/marktimemedia/acf-theme-settings)

###### Components/Single Scroll
![Components](screenshots/components.png)

###### News Page
![News](screenshots/news.png)

###### Modular Page
![Modules](screenshots/modules.png)
