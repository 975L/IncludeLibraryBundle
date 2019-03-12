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
 * Data for AngularJS - https://angularjs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Angular implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '1.*':
            case '1.7.*':
            case '1.7.5':
            case '1.7.5.*':
                $version = '1.7.5';
                $integrity = 'sha384-kGrtvd68FCW4rm700QHDTxc+U3bQU+CnkhgAgqeJQoD4G9gWSlvNkZoXBfbMbTbk';
                break;

            case '1.7.4':
            case '1.7.4.*':
                $version = '1.7.4';
                $integrity = 'sha384-rFekZRMAZzB3UIDUT2JvENq3wUQBQDk2z5/IK9xygZxxhQGeU9y05hWArLgnu2jV';
                break;

            case '1.7.3':
            case '1.7.3.*':
                $version = '1.7.3';
                $integrity = 'sha384-+mxFfuX/P+plEuP/znWVr+T/nFdnSGfA5iOgWQRDF2BXdtNN7xqueSBaEnvwqrnd';
                break;

            case '1.7.2':
            case '1.7.2.*':
                $version = '1.7.2';
                $integrity = 'sha384-R0RcY28wXErVrCnTuQi4b/UPpXUXzmUWTl/GEgX55yoegErbQZlFUW12h6JEEsoi';
                break;

            case '1.2.*':
            case '1.2.32':
            case '1.2.32.*':
                $version = '1.2.32';
                $integrity = 'sha384-wIkUlWqDZgGRTyTEgoO743so47Fga6iCbEGBflBzRLrgzX2at1upKTOfZnlOP+kn';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://ajax.googleapis.com/ajax/libs/angularjs/' . $version  . '/angular.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}