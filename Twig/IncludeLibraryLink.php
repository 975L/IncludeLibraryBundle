<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

//use c975L\IncludeLibraryBundle\Service\IncludeLibraryService;

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
                'inc_lib',
                array($this, 'IncludeLibrary'),
                array(
                'needs_environment' => true,
                'is_safe' => array('html'),
                )
            ),
        );
    }

    public function IncludeLibrary(\Twig_Environment $environment, $name, $type, $version = null)
    {
        //Defines fragment to use
        $fragment = null;
        if ($type == 'css') {
            $fragment = '@c975LIncludeLibrary/fragments/css.html.twig';
        } elseif ($type == 'js' || $type == 'javascript' || $type == 'jscript' || $type == 'script') {
            $fragment = '@c975LIncludeLibrary/fragments/javascript.html.twig';
            $type = 'javascript';
        }

        //Gets data
        $data = $this->service->getData($name, $type, $version);

        //Returns xhtml code to be included
        if ($fragment !== null && $data != null) {
            return str_replace(array("\n", '  ', '  ', '  ', '  ', '  '), ' ', $environment->render($fragment, array('data' => $data)));
        //Returns nothing, as nothing has been defined
        } else {
            return;
        }
    }
}