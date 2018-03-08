<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;

class IncludeLibraryFont extends \Twig_Extension
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
                'inc_font',
                array($this, 'Font'),
                array(
                    'needs_environment' => true,
                    'is_safe' => array('html'),
                )
            ),
        );
    }

    public function Font(\Twig_Environment $environment, $name)
    {
        //Returns the font code
        $render = $environment->render('@c975LIncludeLibrary/fragments/font.html.twig', array(
            'name' => str_replace(' ', '+', $name),
            ));

        return str_replace(array("\n", '  ', '  ', '  ', '  ', '  '), ' ', $render);
    }
}