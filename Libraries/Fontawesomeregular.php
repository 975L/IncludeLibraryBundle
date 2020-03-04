<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\Fontawesome;

/**
 * Data for Fontawesome Regular - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomeregular implements CssInterface, JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $fontawesome = new Fontawesome();

        return $fontawesome->getVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            '5.12.1' => '',
            '5.12.0' => '',
            '5.11.2' => '',
            '5.11.1' => '',
            '5.11.0' => '',
            '5.10.2' => '',
            '5.10.1' => '',
            '5.10.0' => '',
            '5.9.0' => '',
            '5.8.2' => '',
            '5.8.1' => '',
            '5.8.0' => '',
            '5.7.2' => '',
            '5.7.1' => '',
            '5.7.0' => '',
            '5.6.3' => '',
            '5.6.1' => 'sha384-l+NpTtA08hNNeMp0aMBg/cqPh507w3OvQSRoGnHcVoDCS9OtgxqgR7u8mLQv8poF',
            '5.6.0' => 'sha384-yWI8JeRmJFie/rrEn4skBd/XXXfUWuc7wAhaj9q71PzjdYD3JslHSEU7BXCCcVyP',
            '5.5.0' => 'sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY',
            '5.4.2' => 'sha384-OEIzojYBMrmz48aIjVQj7VG38613/sxpP58OW9h5zBYC7biGFlv9tyu5kWmaAYlF',
            '5.4.1' => 'sha384-4e3mPOi7K1/4SAx8aMeZqaZ1Pm4l73ZnRRquHFWzPh2Pa4PMAgZm8/WNh6ydcygU',
            '5.3.1' => 'sha384-ZlNfXjxAqKFWCwMwQFGhmMh3i89dWDnaFU2/VZg9CvsMGA7hXHQsPIqS+JIAmgEq',
            '5.2.0' => 'sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I',
            '5.1.1' => 'sha384-QNorH84/Id/CMkUkiFb5yTU3E/qqapnCVt6k5xh1PFIJ9hJ8VfovwwH/eMLQTjGS',
            '5.1.0' => 'sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD',
            '5.0.13' => 'sha384-EWu6DiBz01XlR6XGsVuabDMbDN6RT8cwNoY+3tIH+6pUCfaNldJYJQfQlbEIWLyA',
            '5.0.12' => 'sha384-RGDxJbFQcd3/Rei8rYb+3xO3YREd0abxm8WfLkYj7j4HHo5ZVuNUGVx8H8GbpFTQ',
            '5.0.10' => 'sha384-R7FIq3bpFaYzR4ogOiz75MKHyuVK0iHja8gmH1DHlZSq4tT/78gKAa7nl4PJD7GP',
            '5.0.9' => 'sha384-seionXF7gEANg+LFxIOw3+igh1ZAWgHpNR8SvE64G/Zgmjd918dTL55e8hOy7P4T',
            '5.0.8' => 'sha384-A/oR8MwZKeyJS+Y0tLZ16QIyje/AmPduwrvjeH6NLiLsp4cdE4uRJl8zobWXBm4u',
            '5.0.6' => 'sha384-HGbVnizaFNw8zW+vIol9xMwBFWdV7/k61278Zo1bnMy9dLmjv48D7rtpgYRTe5Pd',
            '5.0.4' => 'sha384-nM5tBytXTc1HDZ/A3My2gNT2TxLk/M/5yFi0QrOxaZjBi7QpKUfA2QqT+fcSxSlg',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/css/regular.css',
                'integrity' => $integrities[$useVersion],
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
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            '5.12.1' => '',
            '5.12.0' => '',
            '5.11.2' => '',
            '5.11.1' => '',
            '5.11.0' => '',
            '5.10.2' => '',
            '5.10.1' => '',
            '5.10.0' => '',
            '5.9.0' => '',
            '5.8.2' => '',
            '5.8.1' => '',
            '5.8.0' => '',
            '5.7.2' => '',
            '5.7.1' => '',
            '5.7.0' => '',
            '5.6.3' => '',
            '5.6.1' => 'sha384-+e+pqX41PD6VrFw9HZ3YKJHFT+SZoEMBmnMpLUpHrdd5BE46xHCrzap9c6kfTi9H',
            '5.6.0' => 'sha384-gy4pB6yY1j4DPCG6rZcE6NX1Lnqz8ZJEfotVUvCN2EGwlUS3WUHxcn8rrEOYiyiS',
            '5.5.0' => 'sha384-XrvTJeiQ46fxxPrZP6fay5yejA2FV4G1XsS8E4Piz6Fz+7FaEFTw7A7GR972irVV',
            '5.4.2' => 'sha384-Uj7q9rRb3eJNp0j1kXwOBgEWDGbAiJ7Dcuz4hLRQdtza6pawbo/Bmwgr58THzHyR',
            '5.4.1' => 'sha384-SQqzt64aAzh3UJ9XghcA//GE8+NxAIRcuCrrekyDokXP6Bbt/FYAFlV6VSPrZKwH',
            '5.3.1' => 'sha384-sqmLTIuB+bQgkyOcdJ/hAvXl51Z7qqdK/lcH/rt6sdvDKFincQWI+fVgcDZM6NMz',
            '5.2.0' => 'sha384-YdSTwqfKxyP06Jj3UzTeumv8M+Pme60+KND4oF+5r5VeUCvdkw7NhSzFYWbe00ba',
            '5.1.1' => 'sha384-sAzYCvbTTKFOxT4VHu+ZjHRMXjvfjT6TAqOng28g4jba88Peg5+hkoVIqQKGjmj1',
            '5.1.0' => 'sha384-Y+AVd32cSTAMpwehrH10RiRmA28kvu879VbHTG58mUFhd+Uxl/bkAXsgcIesWn3a',
            '5.0.13' => 'sha384-IJ3h7bJ6KqiB70L7/+fc44fl+nKF5eOFkgM9l/zZii9xs7W2aJrwIlyHZiowN+Du',
            '5.0.12' => 'sha384-6XNKyHeL6pEPXURVNSKQ0lUP80a5FHqN0oFqSSS8Qviyy2u0KmCMJlQ5iLiAAPBg',
            '5.0.10' => 'sha384-JWLWlnwX0pRcCBsI3ZzOEyVDoUmngnFnbXR9VedCc3ko4R3xDG+KTMYmVciWbf4N',
            '5.0.9' => 'sha384-BazKgf1FxrIbS1eyw7mhcLSSSD1IOsynTzzleWArWaBKoA8jItTB5QR+40+4tJT1',
            '5.0.8' => 'sha384-t7yHmUlwFrLxHXNLstawVRBMeSLcXTbQ5hsd0ifzwGtN7ZF7RZ8ppM7Ldinuoiif',
            '5.0.6' => 'sha384-G375DXNEVfALvsggywPWDYrRxNOvXaCYt/kiq/GXmbaDW8/B0XtbC8iuLpXXm1jF',
            '5.0.4' => 'sha384-lwwoO5Gg19TptbILrLBjV28EVJ9RW3tD3cGyjCRn3OY9IuLua/YRlE47btZIXfMv',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/js/regular.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}
