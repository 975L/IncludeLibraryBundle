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
 * Data for Bootstrap DatePicker - https://cdnjs.com/libraries/bootstrap-datepicker
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Bootstrapdatepicker implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version, string $integrity)
    {
        return [
            'href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/' . $version . '/css/bootstrap-datepicker.css',
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
            'src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/' . $version  . '/js/bootstrap-datepicker.min.js',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous',
            'defer' => false
        ];
    }
}
