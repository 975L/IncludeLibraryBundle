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
 * Data for Fontawesome Brands - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomebrands implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '5.*':
            case '5.9.*':
            case '5.9.0':
            case '5.9.0.*':
                $version = '5.9.0';
                $integrity = null;
                break;

            case '5.8.*':
            case '5.8.2':
            case '5.8.2.*':
                $version = '5.8.2';
                $integrity = null;
                break;

            case '5.8.1':
            case '5.8.1.*':
                $version = '5.8.1';
                $integrity = null;
                break;

            case '5.8.0':
            case '5.8.0.*':
                $version = '5.8.0';
                $integrity = null;
                break;

            case '5.7.*':
            case '5.7.2':
            case '5.7.2.*':
                $version = '5.7.2';
                $integrity = null;
                break;

            case '5.7.1':
            case '5.7.1.*':
                $version = '5.7.1';
                $integrity = null;
                break;

            case '5.7.0':
            case '5.7.0.*':
                $version = '5.7.0';
                $integrity = null;
                break;

            case '5.6.*':
            case '5.6.3':
            case '5.6.3.*':
                $version = '5.6.3';
                $integrity = null;
                break;

            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-whKHCkwP9f4MyD1vda26+XRyEg2zkyZezur14Kxc784RxUU1E7HvWVYj9EoJnUV7';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-oT8S/zsbHtHRVSs2Weo00ensyC4I8kyMsMhqTD4XrWxyi8NHHxnS0Hy+QEtgeKUE';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-BCEeiNUiLzxxoeYaIu7jJqq0aVVz2O2Ig4WbWEmRQ2Dx/AAxNV1wMDBXyyrxw1Zd';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-Px1uYmw7+bCkOsNAiAV5nxGKJ0Ixn5nChyW8lCK1Li1ic9nbO5pC/iXaq27X5ENt';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-rf1bqOAj3+pw6NqYrtaE1/4Se2NBwkIfeYbsFdtiR6TQz0acWiwJbv1IM/Nt/ite';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-SYNjKRRe+vDW0KSn/LrkhG++hqCLJg9ev1jIh8CHKuEA132pgAz+WofmKAhPpTR7';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-VGCZwiSnlHXYDojsRqeMn3IVvdzTx5JEuHgqZ3bYLCLUBV8rvihHApoA1Aso2TZA';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-Pln/erVatVEIIVh7sfyudOXs5oajCSHg7l5e2Me02e3TklmDuKEhQ8resTIwyI+w';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-KtmfosZaF4BaDBojD9RXBSrq5pNEO79xGiggBxf8tsX+w2dBRpVW5o0BPto2Rb2F';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-ATC/oZittI09GYIoscTZKDdBr/kI3lCwzw3oBMnOYCPVNJ4i7elNlCxSgLfdfFbl';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-rK0EPNdv8UCeRNPzX+96ARRlf9hZM+OukGceDTdbPH30DYcSI1x5QyBU7d2I2kHX';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-1beec9tTZuu+KrTudmvRnGpK81r78DKCAXdphCvdG+PR+n/WCczsYPqTBTvYsM7z';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $version  . '/css/brands.css',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '5.*':
            case '5.9.*':
            case '5.9.0':
            case '5.9.0.*':
                $version = '5.9.0';
                $integrity = null;
                break;

            case '5.8.*':
            case '5.8.2':
            case '5.8.2.*':
                $version = '5.8.2';
                $integrity = null;
                break;

            case '5.8.1':
            case '5.8.1.*':
                $version = '5.8.1';
                $integrity = null;
                break;

            case '5.8.0':
            case '5.8.0.*':
                $version = '5.8.0';
                $integrity = null;
                break;

            case '5.7.*':
            case '5.7.2':
            case '5.7.2.*':
                $version = '5.7.2';
                $integrity = null;
                break;

            case '5.7.1':
            case '5.7.1.*':
                $version = '5.7.1';
                $integrity = null;
                break;

            case '5.7.0':
            case '5.7.0.*':
                $version = '5.7.0';
                $integrity = null;
                break;

            case '5.6.*':
            case '5.6.3':
            case '5.6.3.*':
                $version = '5.6.3';
                $integrity = null;
                break;

            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-rsLJp1pKbmeEMVcdsNJfAWZ9FQP5CrQt6Vikj/usZcTgrD28FhqYqKJn5XIaoXjm';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-GEA3+tbEaglIUriKygE2OQX9k7YrAMJ5oZF0mb8Xx7hUmTTWDuQDtPY4l13jl99w';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-S2C955KPLo8/zc2J7kJTG38hvFV+SnzXM6hwfEUhGHw5wPo6uXbnbjSJgw3clO4G';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-i1RNpxOOEnRm63Ii3TuV0aM8bJ+6Pv6XHpRSJbN7QlIzZIsl7m36R0GhOTTGN3F9';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-lc/yFuYW3B0EW9B2QSpod2KeBxq6/ZizGwAW6mRLUe3kKUVlSBfDIVZKwKIz/DBg';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-2vdvXGQdnt+ze3ylY5ESeZ9TOxwxlOsldUzQBwtjvRpen1FwDT767SqyVbYrltjb';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-4BRtleJgTYsMKIVuV1Z7lNE29r4MxwKR7u88TWG2GaXsmSljIykt/YDbmKndKGID';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-0inRy4HkP0hJ038ZyfQ4vLl+F4POKbqnaUB6ewmU4dWP0ki8Q27A0VFiVRIpscvL';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-ZqDZAkGUHrXxm3bvcTCmQWz4lt7QGLxzlqauKOyLwg8U0wYcYPDIIVTbZZXjbfsM';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-G/XjSSGjG98ANkPn82CYar6ZFqo7iCeZwVZIbNWhAmvCF2l+9b5S21K4udM7TGNu';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-BPIhZF7kZGuZzBS4SP/oIqzpxWuOUtsPLUTVGpGw+EtB1wKt1hv63jb2OCroS3EX';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-6jhVhr5a+Z1nLr9h+fd7ocMEo847wnGFelCHddaOOACUeZNoQwFXTxh4ysXVam8u';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-qJKAzpOXfvmSjzbmsEtlYziSrpVjh5ROPNqb8UZ60myWy7rjTObnarseSKotmJIx';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-4iSpDug9fizYiQRPpPafdAh5NaF8yzNMjOvu3veWgaFm0iIo8y4vUi7f3Yyz5WP1';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-dl3ONr32uA3YqpqKWzhXLs5k1YbKOn3dwiMbEP1S/XQMa3LPRwvJrhW7+lomL/uc';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $version  . '/js/brands.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}