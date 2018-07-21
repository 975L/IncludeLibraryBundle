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
 * Fontawesome - https://fontawesome.com
 */
class Fontawesomeregular implements CssInterface, JavascriptInterface
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.1.1/css/regular.css',
                    'integrity' => 'sha384-QNorH84/Id/CMkUkiFb5yTU3E/qqapnCVt6k5xh1PFIJ9hJ8VfovwwH/eMLQTjGS',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.0':
            case '5.1.0.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.1.0/css/regular.css',
                    'integrity' => 'sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.13/css/regular.css',
                    'integrity' => 'sha384-EWu6DiBz01XlR6XGsVuabDMbDN6RT8cwNoY+3tIH+6pUCfaNldJYJQfQlbEIWLyA',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.12':
            case '5.0.12.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.12/css/regular.css',
                    'integrity' => 'sha384-RGDxJbFQcd3/Rei8rYb+3xO3YREd0abxm8WfLkYj7j4HHo5ZVuNUGVx8H8GbpFTQ',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.10/css/regular.css',
                    'integrity' => 'sha384-R7FIq3bpFaYzR4ogOiz75MKHyuVK0iHja8gmH1DHlZSq4tT/78gKAa7nl4PJD7GP',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.9/css/regular.css',
                    'integrity' => 'sha384-seionXF7gEANg+LFxIOw3+igh1ZAWgHpNR8SvE64G/Zgmjd918dTL55e8hOy7P4T',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.8/css/regular.css',
                    'integrity' => 'sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.6/css/regular.css',
                    'integrity' => 'sha384-HGbVnizaFNw8zW+vIol9xMwBFWdV7/k61278Zo1bnMy9dLmjv48D7rtpgYRTe5Pd',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.4/css/regular.css',
                    'integrity' => 'sha384-nM5tBytXTc1HDZ/A3My2gNT2TxLk/M/5yFi0QrOxaZjBi7QpKUfA2QqT+fcSxSlg',
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
            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.1.1/js/regular.js',
                    'integrity' => 'sha384-sAzYCvbTTKFOxT4VHu+ZjHRMXjvfjT6TAqOng28g4jba88Peg5+hkoVIqQKGjmj1',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.0':
            case '5.1.0.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.1.0/js/regular.js',
                    'integrity' => 'sha384-Y+AVd32cSTAMpwehrH10RiRmA28kvu879VbHTG58mUFhd+Uxl/bkAXsgcIesWn3a',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.13/js/regular.js',
                    'integrity' => 'sha384-IJ3h7bJ6KqiB70L7/+fc44fl+nKF5eOFkgM9l/zZii9xs7W2aJrwIlyHZiowN+Du',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.12':
            case '5.0.12.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.12/js/regular.js',
                    'integrity' => 'sha384-6XNKyHeL6pEPXURVNSKQ0lUP80a5FHqN0oFqSSS8Qviyy2u0KmCMJlQ5iLiAAPBg',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.10/js/regular.js',
                    'integrity' => 'sha384-JWLWlnwX0pRcCBsI3ZzOEyVDoUmngnFnbXR9VedCc3ko4R3xDG+KTMYmVciWbf4N',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.9/js/regular.js',
                    'integrity' => 'sha384-BazKgf1FxrIbS1eyw7mhcLSSSD1IOsynTzzleWArWaBKoA8jItTB5QR+40+4tJT1',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.8/js/regular.js',
                    'integrity' => 'sha384-t7yHmUlwFrLxHXNLstawVRBMeSLcXTbQ5hsd0ifzwGtN7ZF7RZ8ppM7Ldinuoiif',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.6/js/regular.js',
                    'integrity' => 'sha384-G375DXNEVfALvsggywPWDYrRxNOvXaCYt/kiq/GXmbaDW8/B0XtbC8iuLpXXm1jF',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.4/js/regular.js',
                    'integrity' => 'sha384-lwwoO5Gg19TptbILrLBjV28EVJ9RW3tD3cGyjCRn3OY9IuLua/YRlE47btZIXfMv',
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