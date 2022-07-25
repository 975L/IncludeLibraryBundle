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
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = ['latest' => '1.7.5', '1.*' => '1.7.5', '1.7.*' => '1.7.5', '1.7.5' => '1.7.5', '1.7.5.*' => '1.7.5', '1.7.4' => '1.7.4', '1.7.4.*' => '1.7.4', '1.7.3' => '1.7.3', '1.7.3.*' => '1.7.3', '1.7.2' => '1.7.2', '1.7.2.*' => '1.7.2', '1.2.*' => '1.2.32', '1.2.32' => '1.2.32', '1.2.32.*' => '1.2.32'];

        if (isset($versions[$version])) {
            return $versions[$version];
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = ['1.7.5' => 'sha384-kGrtvd68FCW4rm700QHDTxc+U3bQU+CnkhgAgqeJQoD4G9gWSlvNkZoXBfbMbTbk', '1.7.4' => 'sha384-rFekZRMAZzB3UIDUT2JvENq3wUQBQDk2z5/IK9xygZxxhQGeU9y05hWArLgnu2jV', '1.7.3' => 'sha384-+mxFfuX/P+plEuP/znWVr+T/nFdnSGfA5iOgWQRDF2BXdtNN7xqueSBaEnvwqrnd', '1.7.2' => 'sha384-R0RcY28wXErVrCnTuQi4b/UPpXUXzmUWTl/GEgX55yoegErbQZlFUW12h6JEEsoi', '1.2.32' => 'sha384-wIkUlWqDZgGRTyTEgoO743so47Fga6iCbEGBflBzRLrgzX2at1upKTOfZnlOP+kn'];

        //Defines data to use
        $data = null;
        if (isset($useVersion)) {
            $data = ['src' => 'https://ajax.googleapis.com/ajax/libs/angularjs/' . $useVersion  . '/angular.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous'];
        }

        return $data;
    }
}
