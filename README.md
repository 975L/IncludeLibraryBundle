IncludeLibraryBundle
====================

Fed up of having to look to latest, or specifc, version of jQuery, Bootstrap, etc. IncludeLibraryBundle is made for you ;-)

Want to replace this
```html
    <link
        rel="stylesheet"
        type="text/css"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous" />

    <script
        type="text/javascript"
        src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
    </script>
```

by this?
```html
    {{ inc_lib('bootstrap', 'css', '3.3.7') }}
    {{ inc_lib('bootstrap', 'js', '3.3.7') }}
```

IncludeLibraryBundle will let you specify which library and version to include, version can use wildcard "*", see "How to use" below.

[IncludeLibraryBundle dedicated web page](https://975l.com/en/pages/include-library-bundle).

Bundle installation
===================

Step 1: Download the Bundle
---------------------------
Use [Composer](https://getcomposer.org) to install the library
```bash
    composer require c975l/IncludeLibrary-bundle
```

Step 2: Enable the Bundle
-------------------------
Then, enable the bundle by adding it to the list of registered bundles in the `app/AppKernel.php` file of your project:

```php
<?php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new c975L\IncludeLibraryBundle\c975LIncludeLibraryBundle(),
        ];
    }
}
```

How to use
----------
Simply add `{{ lib_inc(library, type, version) }}` to your header and that's it!
- library is the common name of the library, indciated below. It is case unsensitive and can have "-" or "_".
- type is `css` or `javascript`
- Version is the version wanted, it can use wildcards or be omitted to get the latest one

`{{ lib_inc('bootstrap', 'css') }}`: Latest version

`{{ lib_inc('bootstrap', 'css', '3.3.7') }}`: Specific version

`{{ lib_inc('bootstrap', 'css', '3.*') }}`: Wildcard MAJOR version

`{{ lib_inc('bootstrap', 'css', '3.3.*') }}`: Wildcard MINOR version

`{{ lib_inc('bootstrap', 'css', '3.3.3.*') }}`: Wildcard PATCH version

Supported libraries
===================

**[Bootstrap](http://getbootstrap.com) (css + javascript)**

name: bootstrap

- 3.3.7, 4.0.0

**[jQuery](https://jquery.com) (javascript)**

name: jquery / jquery-slim

- 2.2.4 > 3.3.1

**[jQueryUI](https://jquery.com/ui) (javascript)**

name: jquery-ui

- 1.12.1

**[FontAwesome](https://fontawesome.com) (css + javascript)**

name: fontawesome / fontawesome-brands / fontawesome-solids

- 5.0.6

**[CookieConsent](https://cookieconsent.insites.com/) (css + javascript)**

name: cookieconsent

- 3.0.3

**[Popper](https://popper.js.org) (javascript)**

name: popper

- 1.12.9

How to add libraries and/or versions
====================================
**Feel free to make PR's to add other libraries/versions**

- Go into the folder `Libraries`,
- Open the library class (or add it if not present),
- Locate the corresponding method `getCss()` or `getJavascript()`,
- Add versions and wildcards to the switch function, keeping the latest above,
- Add the needed data (take example as existing one).
