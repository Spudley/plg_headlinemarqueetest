Headline Marquee Plugin Example
-------------------------------

This is an example plugin for Joomla! to demonstrate how to write news source plugins for the [HeadlineMarquee module](https://github.com/Spudley/mod_headlinemarquee).

HeadlineMarquee is a Joomla! module that provides a scrolling news feed. It can provide headlines from various built-in news sources, including a Joomla! category or an RSS feed, but can also use a separate plugin to provide a news feed. This is an example of such a plugin, provided to demonstrate how to do it and to act as a base starting point for writing your own.


Installation
------------

This is a standard Joomla plugin. Installation is via Joomla's extension manager.

Obviously, you must also have the HeadlineMarquee module installed before it will do anything useful.

As with other Joomla plugins, once installed, you will need to activate it.


Usage
-----

NB: The primary purpose of this plugin is as a demonstration. **It does not do anything useful.**

The plugin does not have any configuration parameters of its own. Instead, once installed and activated, the plugin will modifies the configuration options available to the HeadlineMarquee module.

HeadlineMarquee has a drop-down list of data sources that can be selected. You will notice that this list now includes an option for this plugin. Once you select this option, you will be given two further config paramters into which you can enter anything you like as free text.

If you save these paramters and load your front-end site with the module in place, you will see that they are added as items to the news feed, along with a third item with a fixed value and a URL.

You can read more about how to write a plugin like this by reading the [plugins.md file in the main mod_headlinemarquee repository](https://github.com/Spudley/mod_headlinemarquee/blob/master/plugins.md).

This plugin is written to work with the current version (2.x) of Headline Marquee. It may stop working with future versions if the module's API changes. Please ensure you are using the correct version of the plugin for the version of the module that you have installed.


Who wrote this?
---------------

This code was written by Simon Champion.

All code in this repository is released under the GPLv2 licence. The GPLv2 licence document should be included with the code.


Support
-------

NB: This is a demonstration and not intended to be a usable product. As such, any support offered will be limited. However, that said, pull requests, bug reports and feature requests are welcome. Please use the normal methods on Github to submit these.

Any issues that relate to the main Headline Marquee module or to its plugin architecture should be directed to its repository rather than being posted here.

Please use the Github issues tracker to report any bugs or feature requests.

If the issue is with the jQuery-Marquee itself, please report it directly to the author.


Caveats and known issues
------------------------

* There are some hard-coded strings that are not language translatable. Since this plugin is not intended for real-world usage, this isn't considered a major issue.


Trademarks and Licenses
-----------------------

* Joomla!® is a registered trademark of Open Source Matters, Inc.
* Joomla! is distributed under the GPLv2 licence.
* jQuery-Marquee is distributed under the ISC license. Licence document can be obtained from the author. Please see https://github.com/aamirafridi/jQuery.Marquee
* The HeadlineMarquee module is distributed under the GPLv2 licence. Licence document is included with the module's code.
* This package is distributed under the GPLv2 licence. The GPLv2 licence document should be included with the code.
