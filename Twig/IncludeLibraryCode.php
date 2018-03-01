<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;

class IncludeLibraryCode extends \Twig_Extension
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
                'inc_lib',
                array($this, 'Code'),
                array(
                'needs_environment' => true,
                'is_safe' => array('html'),
                )
            ),
        );
    }

    public function Code(\Twig_Environment $environment, $name, $type, $version = 'latest', $params = null)
    {
        //Defines fragment to use
        $fragment = null;
        $type = strtolower($type);
        if ($type == 'css') {
            $fragment = '@c975LIncludeLibrary/fragments/css.html.twig';
        } elseif ($type == 'js' || $type == 'javascript' || $type == 'jscript' || $type == 'script') {
            $fragment = '@c975LIncludeLibrary/fragments/javascript.html.twig';
            $type = 'javascript';
        }

        //Gets data
        $data = $this->service->getData($name, $type, $version);

        //Returns xhtml code to be included
        if ($fragment !== null && $data !== null) {
            $render = $environment->render($fragment, array(
                'data' => $data,
                'params' => $params,
                ));

            return str_replace(array("\n", '  ', '  ', '  ', '  ', '  '), ' ', $render);
        }

        //Throws an error if not found
        throw new \Twig_Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_lib()" was not found. Please check name and supported library/versions.');
    }
}