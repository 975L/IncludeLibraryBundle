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
 * Fontawesome - https://fontawesome.com
 */
class Fontawesomebrands
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.0.*':
            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.10/css/brands.css',
                    'integrity' => 'sha384-KtmfosZaF4BaDBojD9RXBSrq5pNEO79xGiggBxf8tsX+w2dBRpVW5o0BPto2Rb2F',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.9/css/brands.css',
                    'integrity' => 'sha384-ATC/oZittI09GYIoscTZKDdBr/kI3lCwzw3oBMnOYCPVNJ4i7elNlCxSgLfdfFbl',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.8/css/brands.css',
                    'integrity' => 'sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.6/css/brands.css',
                    'integrity' => 'sha384-rK0EPNdv8UCeRNPzX+96ARRlf9hZM+OukGceDTdbPH30DYcSI1x5QyBU7d2I2kHX',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.4/css/brands.css',
                    'integrity' => 'sha384-1beec9tTZuu+KrTudmvRnGpK81r78DKCAXdphCvdG+PR+n/WCczsYPqTBTvYsM7z',
                    'crossorigin' => 'anonymous',
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

            case '5.*':
            case '5.0.*':
            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.10/js/brands.js',
                    'integrity' => 'sha384-6jhVhr5a+Z1nLr9h+fd7ocMEo847wnGFelCHddaOOACUeZNoQwFXTxh4ysXVam8u',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.9/js/brands.js',
                    'integrity' => 'sha384-qJKAzpOXfvmSjzbmsEtlYziSrpVjh5ROPNqb8UZ60myWy7rjTObnarseSKotmJIx',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.8/js/brands.js',
                    'integrity' => 'sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.6/js/brands.js',
                    'integrity' => 'sha384-4iSpDug9fizYiQRPpPafdAh5NaF8yzNMjOvu3veWgaFm0iIo8y4vUi7f3Yyz5WP1',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.4/js/brands.js',
                    'integrity' => 'sha384-dl3ONr32uA3YqpqKWzhXLs5k1YbKOn3dwiMbEP1S/XQMa3LPRwvJrhW7+lomL/uc',
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