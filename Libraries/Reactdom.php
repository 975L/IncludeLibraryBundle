<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\JavascriptInterface;

/**
 * Data for React Dom - https://reactjs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Reactdom implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '16.*':
                $version = '16';
                $integrity = '';
                break;

            case '16.6.*':
                $version = '16.6';
                $integrity = '';
                break;

            case '16.6.3':
            case '16.6.3.*':
                $version = '16.6.3';
                $integrity = 'sha384-Zjeg7TkR8dVPiY8Gj38TlwtK4Pf1fbSSXDDV3xSSVHi2EmYGSGNWskz/p75rhh7W';
                break;

            case '16.6.1':
            case '16.6.1.*':
                $version = '16.6.1';
                $integrity = 'sha384-e2EqpuZn4L9Krg1eHONHTjJgPph4IiIER3j/8X7ERazG/7tiEQuc5hUQ4FBXVMV4';
                break;

            case '16.6.0':
            case '16.6.0.*':
                $version = '16.6.0';
                $integrity = 'sha384-0JNHkWT+06+4yfI9lVxocFRUg1mcxeVgKgxyOiNTcw7P0O3VQvNFTwRNTQ/acYOf';
                break;

            case '16.5.*':
                $version = '16.5';
                $integrity = '';
                break;

            case '16.5.2':
            case '16.5.2.*':
                $version = '16.5.2';
                $integrity = 'sha384-nQwIu2ublZ9j68JCxIOJEVGD9MEx7tD9MIEUQUhqt8R78TIc/UekLEQbCrH1K6jZ';
                break;

            case '16.5.1':
            case '16.5.1.*':
                $version = '16.5.1';
                $integrity = 'sha384-YTL0MzCJl88Sr+N/lLDEcq9ynGsh9j/JVdHLZjh2lljiUu3DYwL+y1RdJGNpeXWo';
                break;

            case '16.5.0':
            case '16.5.0.*':
                $version = '16.5.0';
                $integrity = 'sha384-d9odoaDEgoOeOKdQiOXfUtoxapQ7407ej+ZCLL8kwhNyiDdVVlolDkTOqg843Ps5';
                break;

            case '16.4.*':
                $version = '16.4';
                $integrity = '';
                break;

            case '16.4.2':
            case '16.4.2.*':
                $version = '16.4.2';
                $integrity = 'sha384-iMRy7eWIvgURRf3e+W0EL+8yA5TZ+BXVJd+b6ErV08ZR01o/sC106ONNj6gOah6V';
                break;

            case '16.4.1':
            case '16.4.1.*':
                $version = '16.4.1';
                $integrity = 'sha384-g1NqDjFFQF767CjS9GU3C/p4dLd900G4Uuxfw2GGBGI0sYo0MKCbyl+EYI2OQyWZ';
                break;

            case '16.4.0':
            case '16.4.0.*':
                $version = '16.4.0';
                $integrity = 'sha384-nzBRIQVPFmIW3EBk/UtuFGLgz+mPpSfZJlv7B9gqBEmS1OLZQ7kuIoXEaluhMxHE';
                break;

            case '16.3.*':
                $version = '16.3';
                $integrity = '';
                break;

            case '16.3.2':
            case '16.3.2.*':
                $version = '16.3.2';
                $integrity = 'sha384-9HNXemlU8cB7vTVvdlZbsut+fnt78jK2amX1CCxkLlamx+yD4gde8D6DJe+QkHm3';
                break;

            case '16.3.1':
            case '16.3.1.*':
                $version = '16.3.1';
                $integrity = 'sha384-Vq1+LEQ/83klHUsvPZ6Ne+bJ4T8yD7CI+mwRttTijmqepzny/G7sdNiX7HFzIdPp';
                break;

            case '16.3.0':
            case '16.3.0.*':
                $version = '16.3.0';
                $integrity = 'sha384-UlkuiVeJsUOA8w7OsqBT2p65WheKgsZ6Vf8Ne9wOTEYAwqIj0PhP9DtdG1tP2UbA';
                break;

            case '16.2.*':
                $version = '16.2';
                $integrity = '';
                break;

            case '16.2.0':
            case '16.2.0.*':
                $version = '16.2.0';
                $integrity = 'sha384-P4XM5fEtXj1kXZzsm1EOHZ7HmQIuzyRjjvX4na21R4eRLjmm+oUZua5ALb2PIojw';
                break;

            case '16.1.*':
                $version = '16.1';
                $integrity = '';
                break;

            case '16.1.1':
            case '16.1.1.*':
                $version = '16.1.1';
                $integrity = 'sha384-l7E7Vq5TJEp6f3FHPBjTQBTkX59VNjgD9fDU0M/3uWAxhJF63c4c4hN8QiN3Ur1f';
                break;

            case '16.1.0':
            case '16.1.0.*':
                $version = '16.1.0';
                $integrity = 'sha384-HcHQ5kIf6muaB/HiVLWNZdi00UlDTmXTrfFvunk2IZurJny1RY0EJjpfSIkCXc0h';
                break;

            case '16.0.*':
            case '16.0.0':
            case '16.0.0.*':
                $version = '16.0.0';
                $integrity = 'sha384-kjhh69IEDwwyMp0lkZrgOdyB7/WPfpc7HXMM1os2N9afCk+DD8z0vDBKn42fgIRZ';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://unpkg.com/react-dom@' . $version  . '/umd/react-dom.production.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}