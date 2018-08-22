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
 * Data for React Dom - https://reactjs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Reactdom implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '16':
            case '16.*':
                $data = array(
                    'src' => 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js',
                    'crossorigin' => 'crossorigin',
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}