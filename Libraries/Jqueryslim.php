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
 * jQuery - https://code.jquery.com
 */
class Jqueryslim implements JavascriptInterface
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '3.*':
            case '3.3.*':
            case '3.3.1':
            case '3.3.1.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.3.1.slim.min.js',
                    'integrity' => 'sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.3.0':
            case '3.3.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.3.0.slim.min.js',
                    'integrity' => 'sha256-AMg3I7ya76OLPD9M+Mk7kqrA29HUn/FuGBfT/9Uf9ls=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.2.*':
            case '3.2.1':
            case '3.2.1.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.2.1.slim.min.js',
                    'integrity' => 'sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.2.0':
            case '3.2.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.2.0.slim.min.js',
                    'integrity' => 'sha256-qLAv0kBAihcHZLI3fv3WITKeRsUX27hd6upBBa0MSow=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.1.*':
            case '3.1.1':
            case '3.1.1.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.1.1.slim.min.js',
                    'integrity' => 'sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.1.0':
            case '3.1.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.1.0.slim.min.js',
                    'integrity' => 'sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.0.*':
            case '3.0.0':
            case '3.0.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.0.0.slim.min.js',
                    'integrity' => 'sha256-Rf4BadfyCtsvHmO89BUZcbYvNNvZvOT08ALfEzvCsD0=',
                    'crossorigin' => 'anonymous',
                );
                break;

            default:
                $data = null;
                break;
        }

        //Removes defer attribute
        $data['defer'] = false;

        return $data;
    }
}