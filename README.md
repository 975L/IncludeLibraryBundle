IncludeLibraryBundle
====================

Fed up of having to look to latest, or specifc, version of jQuery, Bootstrap, etc. IncludeLibraryBundle is made for you ;-)

IncludeLibraryBundle will let you specify which library and version to include, with a version's selector working like for composer.

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
Simply add `{{ lib_inc('bootstrap', 'css', '^3') }}` to your header and that's it!
