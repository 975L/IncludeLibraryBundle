<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;

class IncludeLibraryLink extends \Twig_Extension
{
    private $service;

    public function __construct(
        \c975L\IncludeLibraryBundle\Service\IncludeLibraryService $service
        )
    {
        $this->service = $service;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction(
                'inc_link',
                array($this, 'Link')
            ),
        );
    }

    public function Link($name, $type, $version = 'latest')
    {
        //Gets data
        $type = strtolower($type);
        $data = $this->service->getData($name, $type, $version);

        //Returns the href or src part
        if ($data !== null) {
            return $type == 'css' ? $data['href'] : $data['src'];
        }

        //Throws an error if not found
        throw new \Twig_Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_link()" was not found. Please check name and supported library/versions.');
    }
}