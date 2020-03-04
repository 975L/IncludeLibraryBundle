<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\React;

/**
 * Data for React Dom - https://reactjs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Reactdom implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $react = new React();

        return $react->getVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            '16.6.3' => 'sha384-Zjeg7TkR8dVPiY8Gj38TlwtK4Pf1fbSSXDDV3xSSVHi2EmYGSGNWskz/p75rhh7W',
            '16.6.1' => 'sha384-e2EqpuZn4L9Krg1eHONHTjJgPph4IiIER3j/8X7ERazG/7tiEQuc5hUQ4FBXVMV4',
            '16.6.0' => 'sha384-0JNHkWT+06+4yfI9lVxocFRUg1mcxeVgKgxyOiNTcw7P0O3VQvNFTwRNTQ/acYOf',
            '16.5' => '',
            '16.5.2' => 'sha384-nQwIu2ublZ9j68JCxIOJEVGD9MEx7tD9MIEUQUhqt8R78TIc/UekLEQbCrH1K6jZ',
            '16.5.1' => 'sha384-YTL0MzCJl88Sr+N/lLDEcq9ynGsh9j/JVdHLZjh2lljiUu3DYwL+y1RdJGNpeXWo',
            '16.5.0' => 'sha384-d9odoaDEgoOeOKdQiOXfUtoxapQ7407ej+ZCLL8kwhNyiDdVVlolDkTOqg843Ps5',
            '16.4' => '',
            '16.4.2' => 'sha384-iMRy7eWIvgURRf3e+W0EL+8yA5TZ+BXVJd+b6ErV08ZR01o/sC106ONNj6gOah6V',
            '16.4.1' => 'sha384-g1NqDjFFQF767CjS9GU3C/p4dLd900G4Uuxfw2GGBGI0sYo0MKCbyl+EYI2OQyWZ',
            '16.4.0' => 'sha384-nzBRIQVPFmIW3EBk/UtuFGLgz+mPpSfZJlv7B9gqBEmS1OLZQ7kuIoXEaluhMxHE',
            '16.3' => '',
            '16.3.2' => 'sha384-9HNXemlU8cB7vTVvdlZbsut+fnt78jK2amX1CCxkLlamx+yD4gde8D6DJe+QkHm3',
            '16.3.1' => 'sha384-Vq1+LEQ/83klHUsvPZ6Ne+bJ4T8yD7CI+mwRttTijmqepzny/G7sdNiX7HFzIdPp',
            '16.3.0' => 'sha384-UlkuiVeJsUOA8w7OsqBT2p65WheKgsZ6Vf8Ne9wOTEYAwqIj0PhP9DtdG1tP2UbA',
            '16.2' => '',
            '16.2.0' => 'sha384-P4XM5fEtXj1kXZzsm1EOHZ7HmQIuzyRjjvX4na21R4eRLjmm+oUZua5ALb2PIojw',
            '16.1' => '',
            '16.1.1' => 'sha384-l7E7Vq5TJEp6f3FHPBjTQBTkX59VNjgD9fDU0M/3uWAxhJF63c4c4hN8QiN3Ur1f',
            '16.1.0' => 'sha384-HcHQ5kIf6muaB/HiVLWNZdi00UlDTmXTrfFvunk2IZurJny1RY0EJjpfSIkCXc0h',
            '16.0.0' => 'sha384-kjhh69IEDwwyMp0lkZrgOdyB7/WPfpc7HXMM1os2N9afCk+DD8z0vDBKn42fgIRZ',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://unpkg.com/react-dom@' . $useVersion  . '/umd/react-dom.production.min.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}
