<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

/*
 * CookieConsent - https://cookieconsent.insites.com
 */
class Cookieconsent
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '3.*':
            case '3.0.*':
            case '3.0.3':
            case '3.0.3.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css',
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

            case '3.*':
            case '3.0.*':
            case '3.0.3':
            case '3.0.3.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}