<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\CssInterface;
use c975L\IncludeLibraryBundle\Libraries\JavascriptInterface;

/*
 * Select2 - https://select2.org
 */
class Select2 implements CssInterface, JavascriptInterface
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '4.*':
            case '4.0.*':
            case '4.0.6':
            case '4.0.6.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css',
                );
                break;

            case '4.0.3':
            case '4.0.3.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }

    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '4.*':
            case '4.0.*':
            case '4.0.6':
            case '4.0.6.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js',
                );
                break;

            case '4.0.3':
            case '4.0.3.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}