<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;

class IncludeLibraryContent extends \Twig_Extension
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
                'inc_content',
                array($this, 'Content'),
                array(
                    'is_safe' => array('html'),
                )
            ),
        );
    }

    public function Content($name, $type, $version = 'latest')
    {
        $type = strtolower($type);

        //Gets type for local file
        $local = false;
        if ($type == 'local') {
            $local = true;
            $type = strtolower(substr($name, strrpos($name, '.') + 1));
        }

        //Gets data for local file
        if ($local === true) {
            $data = $type == 'css' ? array('href' => $name) : array('src' => $name);
        //Gets data for external library
        } else {
            $data = $this->service->getData($name, $type, $version);
        }

        //Returns the content from href or src part
        if ($data !== null) {
            $content = null;
            if ($type == 'css') {
                $content = '<style type="text/css">' . file_get_contents($data['href']) . '</style>';
            } elseif ($type == 'js') {
                $content = '<script type="text/javascript">' . file_get_contents($data['src']) . '</script>';
            }

            return $content;
        }

        //Throws an error if not found
        throw new \Twig_Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_content()" was not found. Please check name and supported library/versions.');
    }
}