<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\JavascriptInterface;

/**
 * Data for Vue.js - https://vuejs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Vue implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '2.*':
            case '2.5.*':
            case '2.5.17':
            case '2.5.17.*':
                $data = array(
                    'src' => 'https://cdn.jsdelivr.net/npm/vue',
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}