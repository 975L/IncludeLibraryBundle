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
use Twig\Environment;
use Twig\Error\Error;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Twig extension to provide Library's data using `inc_lib`
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryCode extends AbstractExtension
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
                'inc_lib',
                array($this, 'Code'),
                array(
                    'needs_environment' => true,
                    'is_safe' => array('html'),
                )
            ),
        );
    }

    /**
     * Returns the xhtml code to be included
     * @return string
     * @throws Error
     */
    public function Code(Environment $environment, $name, $type, $version = 'latest', $params = null)
    {
        $type = strtolower($type);

        //Gets type for local file
        $local = false;
        if ('local' === $type) {
            $local = true;
            $type = strtolower(substr($name, strrpos($name, '.') + 1));
        }

        //Defines fragment to use
        $fragment = null;
        if ('css' === $type) {
            $fragment = '@c975LIncludeLibrary/fragments/css.html.twig';
        } elseif ('js' === $type || 'javascript' === $type || 'jscript' === $type || 'script' === $type) {
            $fragment = '@c975LIncludeLibrary/fragments/javascript.html.twig';
            $type = 'javascript';
        }

        //Gets data for local file
        if ($local) {
            $data = 'css' === $type ? array('href' => $name) : array('src' => $name);
        //Gets data for external library
        } else {
            $data = $this->includeLibraryService->getData($name, $type, $version);
        }

        //Returns xhtml code
        if (null !== $fragment && null !== $data) {
            $render = $environment->render($fragment, array(
                'data' => $data,
                'params' => $params,
                ));

            return str_replace(array("\n", '  ', '  ', '  ', '  ', '  '), ' ', $render);
        }

        //Throws an error if not found
        throw new Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_lib()" was not found. Please check name and supported library/versions.');
    }
}
