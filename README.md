# Plugin Name #
**Contributors:** gordonguthrie  
**Tags:** graphs, tables, spreadsheets, charts, forms, quotation engines, post, page  
**Requires at least:** 3.0.1  
**Tested up to:** 3.4  
**Stable tag:** 1.0  
**License:** GPLv2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

Lets you embed graphs, tables, spreadsheets, forms and quotation engines from the Vixo online spreadsheet.

## Description ##

Drop graphs, tables, spreadsheet accounts, forms and custom quotation engines built in the Vixo spreadsheets into your WordPress pages.

You users can maintain the underlying spreadsheets securely and your website updates automatically.

## Installation ##

1. Upload `vixo-plugin-1.0.zip` to the `/wp-content/plugins/` directory
1. Unzip it
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the shortcode `[vixo url="http://example.com/some/page/"]`

[Vixo](http://vixo.com) is a next generation spreadsheet - designed to be used on the internet - everything, [graphs](http://wordpress.vixo.com/index.php/publish-graphs-on-wordpress/), [forms](http://wordpress.vixo.com/index.php/embeddable-vixo-forms/), [pages of figures](http://wordpress.vixo.com/index.php/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/), [tables of data](http://wordpress.vixo.com/index.php/inserting-spreadsheet-tables-into-wordpress/), has its [own URL](http://wordpress.vixo.com/index.php/vixo-embeddable-urls/) which you can pop into the Vixo shortcode. You can build [sophisticated calculation and quotation](http://wordpress.vixo.com/index.php/building-a-calculator-or-quote-engine/) engines and embed them as well.

## Using The Shortcode ##

Because [everything](http://wordpress.vixo.com/index.php/embeddable-vixo-forms/) in Vixo has a URL, The shortcode is very simple and has only  two forms:

`[vixo url="http://example.com/some/page"]`

`[vixo url="http://example.com/some/page", width="198px" height="100px"]`

If it can the Vixo plugin will work out the size of the thing to be embedded automatically and resize to fit.

For a small number of cases (principally [inserting tables](http://wordpress.vixo.com/index.php/inserting-spreadsheet-tables-into-wordpress/)) Vixo needs to be told how wide and high you want the embedded object to be. In this case use the long form and specify the width and height in pixels as per the example.

## Frequently Asked Questions ##

### Do I need to sign up with Vixo for a spreadsheet? ###

Yes

### Is the Vixo spreadsheet free? ###

There is a free account for up to 500 cells - higher usage requires a paid account.

### Can I try Vixo without signup for an account? ###

Yes, install the plugin and then use some of the example URL's in our tutorials, for instance [this one](http://wordpress.vixo.com/index.php/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/)

### Can I use this plugin with Google spreadsheets? or Excel? ###

No

### Where can I find out about the Vixo Spreadsheet? ###

The [documentation](http://documentation.vixo.com/index.html) is very comprehensive.

### How does Vixo compare to spreadsheets I already know? ###

It is designed to be fairly compatible with Excel, Libre Office and Google Spreadsheets - there are over 150 Excel-compatible functions.

A detailed comparison can be found [here](http://vixo.com/explore/features/)

## Screenshots ##

We have a [WordPress site](http://wordpress.vixo.com/) to show off the plugin.

There are tutorials - with embedded live examples - for the following:

* [graphs and charts](http://wordpress.vixo.com/index.php/publish-graphs-on-wordpress/)
* sortable and filterable [tabular data](http://wordpress.vixo.com/index.php/inserting-spreadsheet-tables-into-wordpress/)
* publishing [basic spreadsheets](http://wordpress.vixo.com/index.php/publishing-figures-on-wordpress-with-a-vixo-spreadsheet/) on the web
* [forms](http://wordpress.vixo.com/index.php/embeddable-vixo-forms/) (with email notification on submission)
* specialist [quotation engines and calculators](http://wordpress.vixo.com/index.php/building-a-calculator-or-quote-engine/)

## Developers ##

The plugin is hosted on [Github](https://github.com/hypernumbers/vixo-plugin).

Feel free to post any problems on the [issues log](https://github.com/hypernumbers/vixo-plugin/issues)

### Tools ###

Used [this web service](http://wordpress-markdown-to-github-markdown.com/) to synch the GitHub README.md with the WordPress readme.txt

## Changelog ##

### 1.0 ###
Initial release.

## Upgrade Notice ##

### 1.0 ###
None
