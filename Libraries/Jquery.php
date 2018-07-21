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
class Jquery implements JavascriptInterface
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
                    'src' => 'https://code.jquery.com/jquery-3.3.1.min.js',
                    'integrity' => 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.3.0':
            case '3.3.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.3.0.min.js',
                    'integrity' => 'sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.2.*':
            case '3.2.1':
            case '3.2.1.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.2.1.min.js',
                    'integrity' => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.2.0':
            case '3.2.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.2.0.min.js',
                    'integrity' => 'sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.1.*':
            case '3.1.1':
            case '3.1.1.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.1.1.min.js',
                    'integrity' => 'sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.1.0':
            case '3.1.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.1.0.min.js',
                    'integrity' => 'sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '3.0.*':
            case '3.0.0':
            case '3.0.0.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.0.0.min.js',
                    'integrity' => 'sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '2.*':
            case '2.2.*':
            case '2.2.4':
            case '2.2.4.*':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-2.2.4.min.js',
                    'integrity' => 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=',
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