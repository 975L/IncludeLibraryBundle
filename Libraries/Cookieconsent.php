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

/**
 * Data for CookieConsent - https://cookieconsent.insites.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Cookieconsent implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        switch ($version) {
            case 'latest':

            case '3.*':
            case '3.1.*':
            case '3.1.0':
            case '3.1.0.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css',
                );
                break;

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

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '3.*':
            case '3.1.*':
            case '3.1.0':
            case '3.1.0.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js',
                );
                break;

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