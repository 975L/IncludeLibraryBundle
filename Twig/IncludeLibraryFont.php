<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Twig;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Twig extension to provide Library's data using `inc_font`
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryFont extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [new TwigFunction(
            'inc_font',
            $this->Font(...),
            ['needs_environment' => true, 'is_safe' => ['html']]
        )];
    }

    /**
     * Returns the font code to be included
     * @return string
     */
    public function Font(Environment $environment, $name)
    {
        //Returns the font code
        $render = $environment->render('@c975LIncludeLibrary/fragments/font.html.twig', ['name' => str_replace(' ', '+', (string) $name)]);

        return str_replace(["\n", '  ', '  ', '  ', '  ', '  '], ' ', $render);
    }
}
