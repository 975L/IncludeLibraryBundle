# Changelog

v1.7.3
------
- Corrected classes names for `Fontawesomebase` and `Fontawesomeregular` (21/03/2018)

v1.7.2
------
- Added fontawesome 5.0.4 + 5.0.8 + 5.0.6 missing data (19/03/2018)
- Added fontawesomeregular (19/03/2018)
- Added fontawesomebase as it has to be there when using brands, solid or regular (19/03/2018)
- Renamed library `Fontawesomesolids` to `Fontawesomesolid` (without final "s") [BC-Break] (19/03/2018)

v1.7.1
------
- Corrected `Select2 > getCss()` (09/03/2018)

v1.7
----
- Added `inc_font()` to include Google font ! (08/03/2018)
- Re-ordered `README.md` (08/03/2018)

v1.6.1.1
--------
- Updated `README.md` (07/03/2018)

v1.6.1
------
- Updated `README.md` (06/03/2018)

v1.6
----
- Added Twig Extension `IncludeLibraryContent` (06/03/2018)
- Added possibility to call a local file (06/03/2018)

v1.5.1
------
- Better explanation of params for javascript in `README.md` (01/03/2018)
- Removed the test to include params in Twig template `javascript.html.twig` as not needed (01/03/2018)

v1.5
----
- Added the possibility to provide url params for javascript files (01/03/2018)

v1.4.1
------
- Updated `README.md` for `inc_link` (27/02/2018)

v1.4
----
- Added library Bootstrap-DatePicker (27/02/2018)
- Added possibility to remove `defer` attribute for javascript files (27/02/2018)
- Removed `defer` attribute for jQuery and Bootstrap javascript files as it may causes problems (27/02/2018)
- Corrected javascript href value for CookieConsent (27/02/2018)
- Added Tinymce stable (27/02/2018)
- Renamed Twig Extension `IncludeLibraryLink` to `IncludeLibraryCode` (27/02/2018)
- Added Twig Extension `IncludeLibraryLink` to return only the href (css) or src (js) part (27/02/2018)

v1.3.2.1
--------
- Corrected select2 versions in `README.md` (26/02/2018)

v1.3.2
------
- Corrected and updated `README.md` (26/02/2018)
- Added select2 library (26/02/2018)

v1.3.1
------
- Corrected `composer require` to lowercase in `README.md` (24/02/2018)
- Added case unsensitive for type value (24/02/2018)

v1.3
----
- Added corrections and re-formatted `README.md` (24/02/2018)
- Added Bootstrap 4.0.0 (24/02/2018)
- Added Popper 1.12.9 library (24/02/2018)
- Corrected test to check existence of data in Twig templates (24/02/2018)
- Throws an error if a library is not found (24/02/2018)
- Corrected version of Cookieconsent + web site (24/02/2018)
- Added defer attribute for javascript files (24/02/2018)
- Added javascript for Fontawesome (SVG) (24/02/2018)
- Removed `getData()` method in libraries classes and replaced by a direct call in service (24/02/2018)
- Added jQuery Slim (24/02/2018)
- Added Fontawesome brands + solids (24/02/2018)
- Added jQueryUI 1.12.1 (24/02/2018)

v1.2
----
- Added wildcards values for existing libraries (23/02/2018)
- Added how-to for adding library/version (23/02/2018)
- Added possibility to get latest version of a library, without having to specify its version (23/02/2018)

v1.1
----
- Added core system files (23/02/2018)
- Added libraries Bootstrap, jQuery, Fontawesome, CookieConsent (23/02/2018)

v1.0
----
- Creation of bundle (23/02/2018)