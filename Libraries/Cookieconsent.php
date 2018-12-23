<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

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
                $version = '3.1.0';
                $integrity = 'sha384-AJ82o1PQz2xMlVWjJ+IdPSfyCVS/nJeYbLcpPhm/cEPrewaEdaYkaG6LCsquvogf';
                break;

            case '3.0.*':
            case '3.0.3':
            case '3.0.3.*':
                $version = '3.0.3';
                $integrity = 'sha384-6iYDyQZuuNT7DcPJGXx241czdv2+GDGUcXRiqw1iXrjgYMTorSetxFP3JCMQMwnR';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/' . $version . '/cookieconsent.min.css',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
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
                $version = '3.1.0';
                $integrity = 'sha384-l+e8/kt7mRYg7RUc/i3MsNwDJlWxkWkFDX10LF/iNglZLT96GBMAPrbaH2GP2lQy';
                break;

            case '3.0.*':
            case '3.0.3':
            case '3.0.3.*':
                $version = '3.0.3';
                $integrity = 'sha384-PDjg2ZdS3khPzd53i18+7tzB32JVQfFMrTXYo21RqPgUmEVAPwIhxOUF/8sP79CS';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/' . $version  . '/cookieconsent.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}