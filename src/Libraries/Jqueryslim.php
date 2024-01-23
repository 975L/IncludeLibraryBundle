<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\Jquery;

/**
 * Data for jQuery Slim - https://code.jquery.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Jqueryslim implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version, string $integrity)
    {
        return [
            'src' => 'https://code.jquery.com/jquery-' . $version  . '.slim.min.js',
            'integrity' => $integrity,
            'crossorigin' => 'anonymous',
            'defer' => false
        ];
    }
}
