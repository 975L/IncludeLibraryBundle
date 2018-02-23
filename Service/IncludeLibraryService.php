<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace c975L\IncludeLibraryBundle\Service;

class IncludeLibraryService
{
    public function getData($name, $type, $version)
    {
        //Gets Library name
        $libraryName = ucfirst(strtolower($name));

        //Loads data from library
        if (file_exists(__DIR__ . '/../Libraries/' . $libraryName . '.php')) {
            include_once(__DIR__ . '/../Libraries/' . $libraryName . '.php');

            $library = 'c975L\IncludeLibraryBundle\Libraries\\' . $libraryName;
            $libraryObject = new $library();

            return $libraryObject->getData($type, $version);
        }

    return null;
    }
}