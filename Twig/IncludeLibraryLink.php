<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;

use c975L\IncludeLibraryBundle\Service\IncludeLibraryService;
use Twig_Extension;

/**
 * Twig extension to provide Library's data using `inc_link`
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryLink extends Twig_Extension
{
    /**
     * Stores IncludeLibrary Service
     * @var IncludeLibraryService
     */
    private $includeLibraryService;

    public function __construct(IncludeLibraryService $includeLibraryService)
    {
        $this->includeLibraryService = $includeLibraryService;
    }

    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction(
                'inc_link',
                array($this, 'Link')
            ),
        );
    }

    /**
     * Returns the link of the requested library
     * @return string
     * @throws Twig_Error
     */
    public function Link($name, $type, $version = 'latest')
    {
        $type = strtolower($type);

        //Gets data
        $data = $this->includeLibraryService->getData($name, $type, $version);

        //Returns the href or src part
        if (null !== $data) {
            return 'css' == $type ? $data['href'] : $data['src'];
        }

        //Throws an error if not found
        throw new Twig_Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_link()" was not found. Please check name and supported library/versions.');
    }
}