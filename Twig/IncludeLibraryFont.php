<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;
use Twig_Environment;
use Twig_Extension;
use Twig_SimpleFunction;

/**
 * Twig extension to provide Library's data using `inc_font`
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryFont extends Twig_Extension
{
    public function getFunctions()
    {
        return array(
            new Twig_SimpleFunction(
                'inc_font',
                array($this, 'Font'),
                array(
                    'needs_environment' => true,
                    'is_safe' => array('html'),
                )
            ),
        );
    }

    /**
     * Returns the font code to be included
     * @return string
     */
    public function Font(Twig_Environment $environment, $name)
    {
        //Returns the font code
        $render = $environment->render('@c975LIncludeLibrary/fragments/font.html.twig', array(
            'name' => str_replace(' ', '+', $name),
            ));

        return str_replace(array("\n", '  ', '  ', '  ', '  ', '  '), ' ', $render);
    }
}
