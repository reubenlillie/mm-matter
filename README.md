# MM Matter

Make matter for [ManualMaker][mm]—front and back.

## Description

MM Matter is an extension plugin for ManualMaker 
to separate the supporting parts of the manual from the `paragraph` text proper.
In publishing, these other parts are called "front matter" and "back matter"
and usually include information about, 
in the case of front matter, the book's title, publisher, copyright, 
and may offer some prefatory remarks,
or, in the case of back matter, 
sources, appendixes, and other documentation.

For more inforation about what you could include as either front or back matter,
see the [_Chicago Manual of Style_][cmos] ch. 1.

By default MM Matter adds post types for 
`front_matter` and `back_matter` respectively,
also assigning the default ManualMaker 
`section` and `index_locator` taxonomies to both post types.

Like ManualMaker, MM Matter itself is also [extensible][extend].

## License

MM Matter is licensed under the [GNU General Public License, version 2 or later][gpl].

&copy; 2017 [The Church of the Nazarene, Inc.][cotn]

[extend]: https://developer.wordpress.org/plugins/hooks/custom-hooks/ "Learn more about Custom Hooks in the WordPress Plugin Handbook"
[cmos]: http://www.chicagomanualofstyle.org/book/ed17/part1/ch01/toc.html "View the CHICAGO MANUAL OF SYLE online"
[cotn]: http://nazarene.org/ "Visit the offical website of the internaitonal Church of the Nazarene"
[gpl]: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html "View the license"
[mm]: https://github.com/reubenlillie/manualmaker "View ManualMaker plugin on GitHub"
