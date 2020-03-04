# Changelog

## v1.11.1

- Cosmetic changes due to Codacy review (04/03/2020)

## v1.11

- Removed use of symplify/easy-coding-standard as abandonned (19/02/2020)

## v1.10.2

- Added Fontawesome versions  5.10.0 -> 5.12.1 (06/02/2020)
- Added missing javascript Fontawesome base 5.6.3 -> 5.9 (06/02/2020)
- Removed composer.lock from repo (06/02/2020)

## v1.10.1

- Added jQuery v3.4.0 + 3.4.1 (19/11/2019)

## v1.10

- Made use of apply spaceless (05/08/2019)

## v1.9.8

- Added Fontawesome versions  5.6.3 -> 5.9.0 (12/07/2019)
- Modified templates to not use 'integity' if null (12/07/2019)

## v1.9.7

- Added new naming for TinyMce (29/06/2019)
- Modified comparing signs (29/06/2019)

## v1.9.6

- Added library [Friconix](https://friconix.com) (19/04/2019)

## v1.9.5.1

- Changed Github's author reference url (08/04/2019)

## v1.9.5

- Made use of Twig namespace (07/03/2019)
- Modified variable naming for a better use (11/03/2019)

## v1.9.4.1

- Modified Dependencyinjection rootNode to be not empty (13/02/2019)

## v1.9.4

- Added bootstrap v3.4.1 and v4.3.1 (13/02/2019)

## v1.9.3

- Added bootstrap v4.2.1 and v4.3.0 (11/02/2019)

## v1.9.2

- Added missing use (25/12/2018)

## v1.9.1

- Added rector to composer dev part (23/12/2018)
- Modified required versions in composer (23/12/2018)
- Corrected React library file (23/12/2018)

## v1.9

- Made all libraries like Fontawesome one (14/12/2018)
- Added Bootstrap 4.1.1, 3.4.0 (14/12/2018)
- Added Angular 1.7.3 -> 1.7.5 (14/12/2018)
- Added React 16.1 -> 16.6 (14/12/2018)
- Added Popper 1.14.4 -> 1.14.6 (14/12/2018)
- Added Fontawesome 5.5.0, 5.6.0, 5.6.1 (28/10/2018)
- Added SRI for all library based on [https://www.srihash.org/](https://www.srihash.org/) (14/12/2018)

## v1.8.3

- Corrected missing `string` declaration (03/12/2018)

## v1.8.2

- Updated composer.json (01/09/2018)
- Added Fontawesome 5.3.1, 5.4.1, 5.4.2 (28/10/2018)
- Simplified Fontawesome calls (28/10/2018)

## v1.8.1.1

- Removed 'true ===' as not needed (25/08/2018)

## v1.8.1

- Added link to BuyMeCoffee (20/08/2018)
- Added link to apidoc (20/08/2018)
- Added `IncludeLibraryServiceInterface` (22/08/2018)
- Removed FQCN (22/08/2018)
- Made use of Yoda style (22/08/2018)
- Added Bootstrap 4.1.3 (22/08/2018)
- Added Fontawesome 5.2.0 (22/08/2018)
- Added link for popeer without versioning as there is no more (22/08/2018)
- Added Vue.js (without versioning) (22/08/2018)
- Added React and React-dom (22/08/2018)

## v1.8

- Added interfaces (21/07/2018)
- Added Bootstrap 4.1.2 (21/07/2018)
- Added BootstrapDatePicker 1.8.0 (21/07/2018)
- Added CookieConsent2 3.1.0 (21/07/2018)
- Added Fontawesome 5.1.1 (21/07/2018)
- Added missing `break` (21/07/2018)
- Added Popper 1.14.3 (21/07/2018)

## v1.7.8

- Added v5.1.0 for Fontawesome (23/06/2018)

## v1.7.7

- Removed 'type="text/javascript"' for js include (24/05/2018)
- Removed 'type="text/css"' for css include (24/05/2018)

## v1.7.6.1

- Removed required in composer.json (22/05/2018)

## v1.7.6

- Added fontawesome 5.0.12 + 5.0.13 (12/05/2018)

## v1.7.5.1

- Added javascript versions for FontAwesome (29/04/2018)

## v1.7.5

- Added fontawesome 5.0.9 + 5.0.10 (29/04/2018)

## v1.7.4

- Added popper 1.14.0 (10/04/2018)
- Added bootstrap 4.1.0 (10/04/2018)

## v1.7.3

- Corrected classes names for `Fontawesomebase` and `Fontawesomeregular` (21/03/2018)

## v1.7.2

- Added fontawesome 5.0.4 + 5.0.8 + 5.0.6 missing data (19/03/2018)
- Added fontawesomeregular (19/03/2018)
- Added fontawesomebase as it has to be there when using brands, solid or regular (19/03/2018)
- Renamed library `Fontawesomesolids` to `Fontawesomesolid` (without final "s") [BC-Break] (19/03/2018)

## v1.7.1

- Corrected `Select2 > getCss()` (09/03/2018)

## v1.7

- Added `inc_font()` to include Google font ! (08/03/2018)
- Re-ordered `README.md` (08/03/2018)

## v1.6.1.1

- Updated `README.md` (07/03/2018)

## v1.6.1

- Updated `README.md` (06/03/2018)

## v1.6

- Added Twig Extension `IncludeLibraryContent` (06/03/2018)
- Added possibility to call a local file (06/03/2018)

## v1.5.1

- Better explanation of params for javascript in `README.md` (01/03/2018)
- Removed the test to include params in Twig template `javascript.html.twig` as not needed (01/03/2018)

## v1.5

- Added the possibility to provide url params for javascript files (01/03/2018)

## v1.4.1

- Updated `README.md` for `inc_link` (27/02/2018)

## v1.4

- Added library Bootstrap-DatePicker (27/02/2018)
- Added possibility to remove `defer` attribute for javascript files (27/02/2018)
- Removed `defer` attribute for jQuery and Bootstrap javascript files as it may causes problems (27/02/2018)
- Corrected javascript href value for CookieConsent (27/02/2018)
- Added Tinymce stable (27/02/2018)
- Renamed Twig Extension `IncludeLibraryLink` to `IncludeLibraryCode` (27/02/2018)
- Added Twig Extension `IncludeLibraryLink` to return only the href (css) or src (js) part (27/02/2018)

## v1.3.2.1

- Corrected select2 versions in `README.md` (26/02/2018)

## v1.3.2

- Corrected and updated `README.md` (26/02/2018)
- Added select2 library (26/02/2018)

## v1.3.1

- Corrected `composer require` to lowercase in `README.md` (24/02/2018)
- Added case unsensitive for type value (24/02/2018)

## v1.3

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

## v1.2

- Added wildcards values for existing libraries (23/02/2018)
- Added how-to for adding library/version (23/02/2018)
- Added possibility to get latest version of a library, without having to specify its version (23/02/2018)

## v1.1

- Added core system files (23/02/2018)
- Added libraries Bootstrap, jQuery, Fontawesome, CookieConsent (23/02/2018)

## v1.0

- Creation of bundle (23/02/2018)
