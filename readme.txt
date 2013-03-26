=== Plugin Name ===
Contributors: gordonguthrie
Tags: graphs, tables, spreadsheets, charts, forms, quotation engines, post, page
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 1.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Lets you embed graphs and graphs, tables, spreadsheets, forms and quotation engines from the Vixo online spreadsheet.

== Description ==

<h3>Insert spreadsheets into WordPress</h3>
You can now easily insert <a title="insert google and excel compatible spreadsheets into WordPress" href="http://wordpress.vixo.com/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/?from=wordpress.org&tab=description">accounts and basic spreadsheets</a> directly into your WordPress site - when the user changes them they automatically update without need to be republished in any way.
<h3>Charts and graphs in WordPress</h3>
Simply drop <a title="graphs and charts in WordPress" href="http://wordpress.vixo.com/graphs-and-charts-in-wordpress/?from=wordpress.org&tab=description">graphs and charts</a> into your WordPress blog. When the underlying data is edited the graph or chart automatically updates.
<h3>Creating and inserting tables in WordPress</h3>
Tabular data is very common. You can now easily <a title="create and insert tables into WordPress" href="http://wordpress.vixo.com/creating-and-inserting-tables-into-wordpress/?from=wordpress.org&tab=description">create and insert tables of data</a> which the end user can sort or filter on your site.
<h3>Embeddable forms for WordPress</h3>
The Vixo spreadsheet lets you create <a href="http://wordpress.vixo.com/embeddable-vixo-forms/?from=wordpress.org&tab=description">simple forms</a> that store information in an online spreadsheet and email you when someone submits data - making your life easier.
<h3>Calculators and quotation engines for WordPress</h3>
Specialist <a href="http://wordpress.vixo.com/building-a-calculator-or-quote-engine/?from=wordpress.org&tab=description">quotation engines and calculators</a> are a cinch with Vixo - they can be built easily in a spreadsheet and then published into your blog.

== Installation ==

1. Upload `vixo-plugin-1.5.zip` to the `/wp-content/plugins/` directory
1. Unzip it
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the shortcode `[vixo url="http://example.com/some/page/"]`

[Vixo](http://vixo.com/?from=wordpress.org&tab=installation) is a next generation spreadsheet - designed to be used on the internet - everything, [graphs](http://wordpress.vixo.com/publish-graphs-on-wordpress/?from=wordpress.org&tab=installation), [forms](http://wordpress.vixo.com/embeddable-vixo-forms/?from=wordpress.org&tab=installation), [pages of figures](http://wordpress.vixo.com/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/?from=wordpress.org&tab=installation), [tables of data](http://wordpress.vixo.com/inserting-spreadsheet-tables-into-wordpress/?from=wordpress.org&tab=installation), has its [own URL](http://wordpress.vixo.com/vixo-embeddable-urls/?from=wordpress.org&tab=installation) which you can pop into the Vixo shortcode. You can build [sophisticated calculation and quotation](http://wordpress.vixo.com/building-a-calculator-or-quote-engine/?from=wordpress.org&tab=installation) engines and embed them as well.

== Using The Shortcode ==

Because [everything](http://wordpress.vixo.com/embeddable-vixo-forms/?from=wordpress.org&tab=shortcode) in Vixo has a URL, The shortcode is very simple and has only  two forms:

`[vixo url="http://example.com/some/page"]`

`[vixo url="http://example.com/some/page", width="198px" height="100px"]`

If it can the Vixo plugin will work out the size of the thing to be embedded automatically and resize to fit.

For a small number of cases (principally [inserting tables](http://wordpress.vixo.com/inserting-spreadsheet-tables-into-wordpress/?from=wordpress.org&tab=shortcode)) Vixo needs to be told how wide and high you want the embedded object to be. In this case use the long form and specify the width and height in pixels as per the example.

== Frequently Asked Questions ==

= Do I need to sign up with Vixo for a spreadsheet? =

Yes

= Is the Vixo spreadsheet free? =

There is a free account for up to 500 cells - higher usage requires a paid account.

= Can I try Vixo without signup for an account? =

Yes, install the plugin and then use some of the example URL's in our tutorials, for instance [this one](http://wordpress.vixo.com/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/?from=wordpress.org&tab=faq)

= Can I use this plugin with Google spreadsheets? or Excel? =

No

= Where can I find out about the Vixo Spreadsheet? =

The [documentation](http://documentation.vixo.com/index.html?from=wordpress.org&tab=faq) is very comprehensive.

= How does Vixo compare to spreadsheets I already know? =

It is designed to be fairly compatible with Excel, Libre Office and Google Spreadsheets - there are over 150 Excel-compatible functions.

A detailed comparison can be found [here](http://vixo.com/explore/features/?from=wordpress.org&tab=faq)

== Screenshots ==

We have a [WordPress site](http://wordpress.vixo.com/?from=wordpress.org&tab=screenshots) to show off the plugin.

There are tutorials - with embedded live examples - for the following:

* [graphs and charts](http://wordpress.vixo.com/publish-graphs-on-wordpress/?from=wordpress.org&tab=screenshots)
* sortable and filterable [tabular data](http://wordpress.vixo.com/inserting-spreadsheet-tables-into-wordpress/?from=wordpress.org&tab=screenshots)
* publishing [basic spreadsheets](http://wordpress.vixo.com/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/?from=wordpress.org&tab=screenshots) on the web
* [forms](http://wordpress.vixo.com/embeddable-vixo-forms/?from=wordpress.org&tab=screenshots) (with email notification on submission)
* specialist [quotation engines and calculators](http://wordpress.vixo.com/building-a-calculator-or-quote-engine/?from=wordpress.org&tab=screenshots)

== Developers ==

The plugin is hosted on [Github](https://github.com/hypernumbers/vixo-plugin).

Feel free to post any problems on the [issues log](https://github.com/hypernumbers/vixo-plugin/issues)

This readme was converted from WordPress markdown to GitHub markdown on http://wordpress-markdown-to-github-markdown.com/

= Tools =

Used [this web service](http://wordpress-markdown-to-github-markdown.com/) to synch the GitHub README.md with the WordPress readme.txt

== Changelog ==

= 1.5 =

Fixes in documentation and plugin embedding.

= 1.4 =

Two major bug fixes:
* use of unsafe jQuery expressions in previous version means that sites using native WordPress jQuery would fail to load spreadsheet elements
* failure to load native WordPress jQuery means themes that don't use jQuery would fail to load spreadsheet elements

= 1.3 =

Had 3 lines after '?>' leading to a 'The plugin generated 3 characters of unexected output during activation' error.

= 1.2 =

Turned off debugging by default

= 1.0 =

Initial release.

== Upgrade Notice ==

= 1.0 =

None
