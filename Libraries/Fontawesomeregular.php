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
 * Data for Fontawesome Regular - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomeregular implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '5.*':
            case '5.6.*':
            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-l+NpTtA08hNNeMp0aMBg/cqPh507w3OvQSRoGnHcVoDCS9OtgxqgR7u8mLQv8poF';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-yWI8JeRmJFie/rrEn4skBd/XXXfUWuc7wAhaj9q71PzjdYD3JslHSEU7BXCCcVyP';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-OEIzojYBMrmz48aIjVQj7VG38613/sxpP58OW9h5zBYC7biGFlv9tyu5kWmaAYlF';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-4e3mPOi7K1/4SAx8aMeZqaZ1Pm4l73ZnRRquHFWzPh2Pa4PMAgZm8/WNh6ydcygU';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-QNorH84/Id/CMkUkiFb5yTU3E/qqapnCVt6k5xh1PFIJ9hJ8VfovwwH/eMLQTjGS';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-EWu6DiBz01XlR6XGsVuabDMbDN6RT8cwNoY+3tIH+6pUCfaNldJYJQfQlbEIWLyA';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-RGDxJbFQcd3/Rei8rYb+3xO3YREd0abxm8WfLkYj7j4HHo5ZVuNUGVx8H8GbpFTQ';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-R7FIq3bpFaYzR4ogOiz75MKHyuVK0iHja8gmH1DHlZSq4tT/78gKAa7nl4PJD7GP';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-seionXF7gEANg+LFxIOw3+igh1ZAWgHpNR8SvE64G/Zgmjd918dTL55e8hOy7P4T';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-HGbVnizaFNw8zW+vIol9xMwBFWdV7/k61278Zo1bnMy9dLmjv48D7rtpgYRTe5Pd';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-nM5tBytXTc1HDZ/A3My2gNT2TxLk/M/5yFi0QrOxaZjBi7QpKUfA2QqT+fcSxSlg';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $version  . '/css/regular.css',
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
            case '5.6.*':
            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-+e+pqX41PD6VrFw9HZ3YKJHFT+SZoEMBmnMpLUpHrdd5BE46xHCrzap9c6kfTi9H';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-gy4pB6yY1j4DPCG6rZcE6NX1Lnqz8ZJEfotVUvCN2EGwlUS3WUHxcn8rrEOYiyiS';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-XrvTJeiQ46fxxPrZP6fay5yejA2FV4G1XsS8E4Piz6Fz+7FaEFTw7A7GR972irVV';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-Uj7q9rRb3eJNp0j1kXwOBgEWDGbAiJ7Dcuz4hLRQdtza6pawbo/Bmwgr58THzHyR';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-SQqzt64aAzh3UJ9XghcA//GE8+NxAIRcuCrrekyDokXP6Bbt/FYAFlV6VSPrZKwH';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-sqmLTIuB+bQgkyOcdJ/hAvXl51Z7qqdK/lcH/rt6sdvDKFincQWI+fVgcDZM6NMz';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-YdSTwqfKxyP06Jj3UzTeumv8M+Pme60+KND4oF+5r5VeUCvdkw7NhSzFYWbe00ba';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-sAzYCvbTTKFOxT4VHu+ZjHRMXjvfjT6TAqOng28g4jba88Peg5+hkoVIqQKGjmj1';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-Y+AVd32cSTAMpwehrH10RiRmA28kvu879VbHTG58mUFhd+Uxl/bkAXsgcIesWn3a';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-IJ3h7bJ6KqiB70L7/+fc44fl+nKF5eOFkgM9l/zZii9xs7W2aJrwIlyHZiowN+Du';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-6XNKyHeL6pEPXURVNSKQ0lUP80a5FHqN0oFqSSS8Qviyy2u0KmCMJlQ5iLiAAPBg';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-JWLWlnwX0pRcCBsI3ZzOEyVDoUmngnFnbXR9VedCc3ko4R3xDG+KTMYmVciWbf4N';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-BazKgf1FxrIbS1eyw7mhcLSSSD1IOsynTzzleWArWaBKoA8jItTB5QR+40+4tJT1';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-t7yHmUlwFrLxHXNLstawVRBMeSLcXTbQ5hsd0ifzwGtN7ZF7RZ8ppM7Ldinuoiif';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-G375DXNEVfALvsggywPWDYrRxNOvXaCYt/kiq/GXmbaDW8/B0XtbC8iuLpXXm1jF';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-lwwoO5Gg19TptbILrLBjV28EVJ9RW3tD3cGyjCRn3OY9IuLua/YRlE47btZIXfMv';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $version  . '/js/regular.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}