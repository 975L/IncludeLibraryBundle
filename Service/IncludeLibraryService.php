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
        $libraryName = ucfirst(strtolower(str_replace(array('_', '-'), '', $name)));

        //Loads data from library
        if (file_exists(__DIR__ . '/../Libraries/' . $libraryName . '.php')) {
            //Defines Library to use
            $library = 'c975L\IncludeLibraryBundle\Libraries\\' . $libraryName;
            $libraryObject = new $library();

            //Defines method to use
            $method = 'get' . ucfirst($type);

            //Gets data
            if (method_exists($libraryObject, $method)) {
                return $libraryObject->$method($version);
            }

            //Will throw an error in Twig function
            return null;
        }

        //Will throw an error in Twig function
        return null;
    }
}
