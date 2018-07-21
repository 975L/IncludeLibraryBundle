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

/*
 * jQuery - https://jquery.com/ui
 */
class Jqueryui implements JavascriptInterface
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
            case '1.12.*':
            case '1.12.1':
            case '1.12.1.*':
                $data = array(
                    'src' => 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
                    'integrity' => 'sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=',
                    'crossorigin' => 'anonymous',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}