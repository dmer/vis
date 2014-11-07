experiments in data visualization
===
This is series of basic data visualizations using Javascript and the D3 libary based loosely on the bubble pack layout examples by Mike Bostock.

Library and Special Collections Data Visualization
[example online at http://merleaux.net/vis]

These are the humble beginnings of a grander scheme to create a set of visualization-based browsing discovery tools that can be applied to exploration of cultural heritage collections. A d3 bubble pack-style data visualization with a twist, this pulls directly from a database via the associated php script and displays place names derived from a library catalog. The size of bubble corralates to the number of records with that place name. Clicking on the bubble opens a search for that place name in the catalog.

Next steps are to tie the PHP directly to the JSON output of a database API or even multiple collection API's.

In a perfect world of standardized, authoritative metadata these sorts of visualization browsings can lead to new insights about the contents and makeup of a collection - revealing themes previously not noticed. In the more common world of legacy data that still needs thousands of hours of cleanup, these tools are just as useful in a different way - illuminating errors and inconsistencies in a way that makes them both hard to ignore and easy to locate and fix.
