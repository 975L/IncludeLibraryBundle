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
 * Data for Select2 - https://select2.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Select2 implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version, string $integrity)
    {
        return [
            'href' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/' . $version . '/css/select2.min.css',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous'
        ];
    }

    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript(string $version, string $integrity)
    {
        return [
            'src' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/' . $version  . '/js/select2.min.js',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous',
            'defer' => false
        ];
    }
}
