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

IncludeLibraryBundle will let you specify which library and version to include, with a version's selector working like for composer (not yet implemented, working only for defined versions).

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
- library is the common name of the library, not case sensitive
- type is `css` or `javascript`
- Version is the version wanted, it can use wildcards or be omitted to get the latest one

Specific version: `{{ lib_inc('bootstrap', 'css', '3.3.7') }}`
Latest version: `{{ lib_inc('bootstrap', 'css') }}`
Wildcard MAJOR version: `{{ lib_inc('bootstrap', 'css', '3.*') }}`
Wildcard MINOR version: `{{ lib_inc('bootstrap', 'css', '3.3.*') }}`
Wildcard PATCH version: `{{ lib_inc('bootstrap', 'css', '3.3.3.*') }}`

Supported libraries
===================

Bootstrap (css + javascript)
----------------------------
- 3.3.7

jQuery (javascript)
-------------------
- 3.2.1

FontAwesome (css)
-----------------
- 5.0.6

CookieConsent (css + javascript)
--------------------------------
- 3.0.4

How to add libraries and/or versions
------------------------------------
**Feel free to make PR's to add other libraries/versions**

- Go in the folder `Libraries`,
- Open the library class (or add it if not present),
- Locate the correspondint method `getCss()` or `getJavascript()`,
- Add versions and wildcards, keeping the latest above
