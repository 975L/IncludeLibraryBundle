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
use Twig\Extension\AbstractExtension;
use Twig\Error\Error;
use Twig\TwigFunction;

/**
 * Twig extension to provide Library's content using `inc_content`
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryContent extends AbstractExtension
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
            new TwigFunction(
                'inc_content',
                array($this, 'Content'),
                array(
                    'is_safe' => array('html'),
                )
            ),
        );
    }

    /**
     * Returns the content of the requested library
     * @return string
     * @throws Error
     */
    public function Content($name, $type, $version = 'latest')
    {
        $type = strtolower($type);

        //Gets type for local file
        $local = false;
        if ('local' == $type) {
            $local = true;
            $type = strtolower(substr($name, strrpos($name, '.') + 1));
        }

        //Gets data for local file
        if ($local) {
            $data = 'css' == $type ? array('href' => $name) : array('src' => $name);
        //Gets data for external library
        } else {
            $data = $this->includeLibraryService->getData($name, $type, $version);
        }

        //Returns the content from href or src part
        if (null != $data) {
            $content = null;
            if ('css' == $type) {
                $content = '<style type="text/css">' . file_get_contents($data['href']) . '</style>';
            } elseif ('js' == $type) {
                $content = '<script type="text/javascript">' . file_get_contents($data['src']) . '</script>';
            }

            return $content;
        }

        //Throws an error if not found
        throw new Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_content()" was not found. Please check name and supported library/versions.');
    }
}
