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

IncludeLibraryBundle will let you specify which library and version to include, version can use wildcard "*". **It will do a lot more**, see "How to use" below.

**You can also include [Google Font](https://fonts.google.com), see below.**

[IncludeLibraryBundle dedicated web page](https://975l.com/en/pages/include-library-bundle).

[IncludeLibraryBundle API documentation](https://975l.com/apidoc/c975L/IncludeLibraryBundle.html).


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
IncludeLibraryBundle provide the following Twig extension functions `inc_lib()`, `inc_link()`, `inc_content()` and `inc_font()`

Include Library - `inc_lib()`
-----------------------------
Simply add `{{ inc_lib('library', 'type', 'version', 'params') }}` to your header and that's it!
- library is the name of the library (see below Supported libraries). It is case unsensitive and can have "-" or "_", if you want to use 'BoOsTrap', it will work ;-).
- type is `css` or `js` or `local`, also case insensitive.
- version is the version wanted, it can use wildcard or be omitted to get the latest one.
- params is the parameters you want to add when calling a javascript.

Examples
--------
`{{ inc_lib('bootstrap', 'css') }}`: Latest version

`{{ inc_lib('bootstrap', 'css', '3.3.7') }}`: Specific version

`{{ inc_lib('bootstrap', 'css', '3.*') }}`: Wildcard MAJOR version

`{{ inc_lib('bootstrap', 'css', '3.3.*') }}`: Wildcard MINOR version

`{{ inc_lib('bootstrap', 'css', '3.3.3.*') }}`: Wildcard PATCH version

`{{ inc_lib(absolute_url(asset('css/styles.min.css')), 'local') }}`: local file

Local file
----------
To include a local file, you need to provide an **absolute url**. **Important** the type is determined by the extension provided in the url, so it has to be '.css' or '.js'. While it's not really useful for `inc_lib()`, it is for `inc_content()` (see below) as it will allow to include the content of the called library in the html, which can be useful when creating PDF files with `wkhtmltopdf` for example.

Javascript parameters
---------------------
For **javascript**, if you need to add some url query parameters, you can do so by calling the fourth argument `params` of `inc_lib()`. Works also for local file.

For example, Tinymce needs an apiKey, so call it like this: `{{ inc_lib('tinymce', 'js', 'stable', '?apiKey=YOUR_API_KEY') }}`, you simply need to provide the full query parameters, including "?" and "&" as it will be added to the srcipt call.

Just get link - `inc_link()`
----------------------------
You can also use `inc_link` in the same way `{{ inc_link('bootstrap', 'css', '3.*') }}` to get only the href (css) or src (js) part (url). **Does not work for a local file** as it will return the same url as provided.

For example, Tinymce needs to get the css used on the website to display using those styles, so we need to provide it the url, `inc_link` will do so :
```javascript
<script type="text/javascript">
    tinymce.init({
        content_css : [
            '{{ inc_link('bootstrap', 'css', '3.*') }}',
        ],
    //...
    });
</script>
```

Get content - `inc_content()`
-----------------------------
If you need to get the content to include, i.e. for `wkhtmltopdf`, you can use the function `inc_content` in the same way `{{ inc_content('bootstrap', 'css', '3.*') }}`. Works also for local file. Content will be wrapped within `<style type="text/css"></style>` for `css` and `<script type="text/javascript"></script>` for `js`.

Include Google font - `inc_font()`
----------------------------------
All you have to do is to worry about its name! Find your [Google Font](https://fonts.google.com/), pick its name and call it with `{{ inc_font('FONT_NAME') }}`. That's it! Now you can refer, using the same names in your css files!

Supported libraries
===================
Use following names and versions (+ wildcard if wanted, as indicated above) in the functions `inc_lib`, `inc_link` or `inc_content`:

- **[Angular](https://angularjs.org) (javascript)** -> `angular`: 1.2.32, 1.7.2
- **[Bootstrap](http://getbootstrap.com) (css + javascript)** -> `bootstrap`: 3.3.7, 4.0.0, 4.1.0, 4.1.2, 4.1.3
- **[Bootstrap DatePicker](https://github.com/uxsolutions/bootstrap-datepicker) (css + javascript)** -> `bootstrap-datepicker`: 1.7.1, 1.8.0
- **[jQuery](https://jquery.com) (javascript)** -> `jquery`, `jquery-slim`: 2.2.4 > 3.3.1
- **[jQueryUI](https://jquery.com/ui) (javascript)** -> `jquery-ui`: 1.12.1
- **[Tinymce](https://www.tinymce.com) (javascript)** -> `tinymce`: stable
- **[FontAwesome](https://fontawesome.com) (css + javascript)** -> `fontawesome`, `fontawesome-base`, `fontawesome-regular`, `fontawesome-brands`, `fontawesome-solid`: 5.0.4, 5.0.6, 5.0.8, 5.0.9, 5.0.10, 5.0.12, 5.0.13, 5.1.0, 5.1.1, 5.2.0
- **[CookieConsent](https://cookieconsent.insites.com) (css + javascript)** -> `cookieconsent`: 3.0.3, 3.1.0
- **[Popper](https://popper.js.org) (javascript)** -> `popper`: 1.12.9, 1.14.0, 1.14.3, 1.* (no versioning)
- **[React](https://reactjs.org) (javascript)** -> `react`, `react-dom`: 16
- **[Select2](https://select2.org) (css + javascript)** -> `select2`: 4.0.3, 4.0.6-rc-.0
- **[Vue.js](https://vuejs.org) (javascript)** -> vue: 2.5.17 (without versioning)

How to add libraries and/or versions
====================================
**Feel free to make PR's to add other libraries/versions :-)**

- Go into the folder `Libraries`,
- Open the library class (or add it if not present),
- Locate the corresponding method `getCss()` or `getJavascript()`,
- Add versions and wildcards to the switch function, keeping the latest above,
- Add the needed data (take example as existing one).

**If this project help you to reduce time to develop, you can [buy me a coffee](https://www.buymeacoffee.com/LaurentMarquet) :)**