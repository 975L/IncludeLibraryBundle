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
 * Data for CookieConsent - https://cookieconsent.insites.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Cookieconsent implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version, string $integrity)
    {
        return [
            'href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/' . $version . '/cookieconsent.min.css',
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
            'src' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/' . $version  . '/cookieconsent.min.js',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous',
            'defer' => false
        ];
    }
}
