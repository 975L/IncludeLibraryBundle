<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace c975L\IncludeLibraryBundle\Service;

/**
 * Interface to be called for DI for IncludeLibrary Main related services
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
interface IncludeLibraryServiceInterface
{
    /**
     * Gets the data corresponding to library, type and version
     * @return array|null
     */
    public function getData(string $name, string $type, string $version);
}
