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
 * CookieConsent - https://silktide.com/tools/cookie-consent
 */
class Cookieconsent
{
    public function getData($type, $version)
    {
        //Gets css
        if ($type == 'css') {
            return $this->getCss($version);
        //Gets javascript
        } elseif ($type == 'javascript') {
            return $this->getJavascript($version);
        }

        return;
    }

    /*
     * Refer to README.md for how-to add versions/library
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':
            case '3.*':
            case '3.0.*':
            case '3.0.4':
            case '3.0.4.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.4/cookieconsent.min.css',
                );
                break;
            default:
                $data = '';
                break;
        }

        return $data;
    }

    /*
     * Refer to README.md for how-to add versions/library
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':
            case '3.*':
            case '3.0.*':
            case '3.0.4':
            case '3.0.4.*':
                $data = array(
                    'src' => 'https//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.4/cookieconsent.min.js',
                );
                break;
            default:
                $data = '';
                break;
        }

        return $data;
    }
}