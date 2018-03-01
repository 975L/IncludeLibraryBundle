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
    composer require c975l/includelibrary-bundle
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
Simply add `{{ inc_lib('library', 'type', 'version', 'params') }}` to your header and that's it!
- library is the common name of the library, indicated below. It is case unsensitive and can have "-" or "_".
- type is `css` or `js`, also case insensitive
- Version is the version wanted, it can use wildcards or be omitted to get the latest one

`{{ inc_lib('bootstrap', 'css') }}`: Latest version

`{{ inc_lib('bootstrap', 'css', '3.3.7') }}`: Specific version

`{{ inc_lib('bootstrap', 'css', '3.*') }}`: Wildcard MAJOR version

`{{ inc_lib('bootstrap', 'css', '3.3.*') }}`: Wildcard MINOR version

`{{ inc_lib('bootstrap', 'css', '3.3.3.*') }}`: Wildcard PATCH version

You can also use `inc_link` in the same way `{{ inc_link('bootstrap', 'css', '3.*') }}` to get only the href (css) or src (js) part (url).

For **javascript**, if you need to add some url query parameters, you can do so by calling the fourth argument of `inc_lib()`.

For example, Tinymce needs an apiKey, so call it like this: `{{ inc_lib('tinymce', 'js', 'stable', '?apiKey=YOUR_API_KEY') }}`, you simply need to provide the full query parameters, including "?" and "&" as it will be added to the srcipt call.


Supported libraries
===================
Use one of the names between '' to specify in the function `inc_lib` and wildcard for versions as indicated above.

- **[Bootstrap](http://getbootstrap.com) (css + javascript)** -> 'bootstrap': 3.3.7, 4.0.0
- **[Bootstrap DatePicker](https://github.com/uxsolutions/bootstrap-datepicker) (css + javascript)** -> 'bootstrap-datepicker': 1.7.1
- **[jQuery](https://jquery.com) (javascript)** -> 'jquery', 'jquery-slim': 2.2.4 > 3.3.1
- **[jQueryUI](https://jquery.com/ui) (javascript)** -> 'jquery-ui': 1.12.1
- **[Tinymce](https://www.tinymce.com) (javascript)** -> 'tinymce': stable
- **[FontAwesome](https://fontawesome.com) (css + javascript)** -> 'fontawesome', 'fontawesome-brands', 'fontawesome-solids': 5.0.6
- **[CookieConsent](https://cookieconsent.insites.com) (css + javascript)** -> 'cookieconsent': 3.0.3
- **[Popper](https://popper.js.org) (javascript)** -> 'popper': 1.12.9
- **[Select2](https://select2.org) (css + javascript)** -> 'select2': 4.0.3, 4.0.6-rc-.0

How to add libraries and/or versions
====================================
**Feel free to make PR's to add other libraries/versions :-)**

- Go into the folder `Libraries`,
- Open the library class (or add it if not present),
- Locate the corresponding method `getCss()` or `getJavascript()`,
- Add versions and wildcards to the switch function, keeping the latest above,
- Add the needed data (take example as existing one).
