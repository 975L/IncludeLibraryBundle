<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

/**
 * Data for Popper - https://popper.js.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Popper implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version, string $integrity)
    {
        return [
            'src' => 'https://unpkg.com/popper.js' . $version  . '/dist/umd/popper.min.js',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous'
        ];
    }
}
