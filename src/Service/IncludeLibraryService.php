<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace c975L\IncludeLibraryBundle\Service;


/**
 * Main services related to IncludeLibrary
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryService implements IncludeLibraryServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getData(string $name, string $type, string $version)
    {
        // Gets data
        $filename = __DIR__."/../integrities/$type/$name.json";
        if (file_exists($filename)) {
            $integrities = json_decode(file_get_contents($filename), true);

                // Defines the version to use
            if('latest' === $version) {
                $useVersion = array_key_first($integrities);
            } else {
                $matched = preg_grep('/^' . $version . '/', array_keys($integrities));
                $useVersion = empty($matched) ? null : $matched[array_key_first($matched)];
            }

            // Gets Library name
            $libraryName = ucfirst(strtolower(str_replace(['_', '-'], '', $name)));

            // Loads data from library
            if (null !== $useVersion && file_exists(__DIR__ . '/../Libraries/' . $libraryName . '.php')) {
                //Defines Library to use
                $library = 'c975L\IncludeLibraryBundle\Libraries\\' . $libraryName;
                $libraryObject = new $library();

                //Defines method to use
                $method = 'get' . ucfirst($type);

                //Gets data
                if (method_exists($libraryObject, $method)) {
                    return $libraryObject->$method($useVersion, $integrities[$useVersion]);
                }
            }
        }

        // Will throw an error in Twig function
        return null;
    }
}
