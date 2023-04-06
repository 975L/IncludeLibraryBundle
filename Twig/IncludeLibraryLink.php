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
 * Twig extension to provide Library's data using `inc_link`
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class IncludeLibraryLink extends AbstractExtension
{
    public function __construct(
        /**
         * Stores IncludeLibrary Service
         */
        private readonly IncludeLibraryService $includeLibraryService
    )
    {
    }

    public function getFunctions(): array
    {
        return [new TwigFunction(
            'inc_link',
            $this->Link(...)
        )];
    }

    /**
     * Returns the link of the requested library
     * @return string
     * @throws Error
     */
    public function Link($name, $type, $version = 'latest')
    {
        $type = strtolower((string) $type);

        //Gets data
        $data = $this->includeLibraryService->getData($name, $type, $version);

        //Returns the href or src part
        if (null !== $data) {
            return 'css' === $type ? $data['href'] : $data['src'];
        }

        //Throws an error if not found
        throw new Error('The Library "' . $name . ' (' . $type . ') version ' . $version . '" requested via "inc_link()" was not found. Please check name and supported library/versions.');
    }
}
