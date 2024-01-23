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
 * Data for Fontawesome - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesome implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version, string $integrity)
    {
        return [
            'href' => 'https://use.fontawesome.com/releases/v' . $version  . '/css/all.css',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version, string $integrity)
    {
        return [
            'src' => 'https://use.fontawesome.com/releases/v' . $version  . '/js/all.js',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous'
        ];
    }
}
