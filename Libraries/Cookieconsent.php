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
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = ['latest' => '', '3.*' => '3.1.0', '3.1.*' => '3.1.0', '3.1.0' => '3.1.0', '3.1.0.*' => '3.1.0', '3.0.*' => '3.0.3', '3.0.3' => '3.0.3', '3.0.3.*' => '3.0.3'];

        if (isset($versions[$version])) {
            return $versions[$version];
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = ['3.1.0' => 'sha384-AJ82o1PQz2xMlVWjJ+IdPSfyCVS/nJeYbLcpPhm/cEPrewaEdaYkaG6LCsquvogf', '3.0.3' => 'sha384-6iYDyQZuuNT7DcPJGXx241czdv2+GDGUcXRiqw1iXrjgYMTorSetxFP3JCMQMwnR'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['href' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/' . $useVersion . '/cookieconsent.min.css', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous'];
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
        $integrities = ['3.1.0' => 'sha384-l+e8/kt7mRYg7RUc/i3MsNwDJlWxkWkFDX10LF/iNglZLT96GBMAPrbaH2GP2lQy', '3.0.3' => 'sha384-PDjg2ZdS3khPzd53i18+7tzB32JVQfFMrTXYo21RqPgUmEVAPwIhxOUF/8sP79CS'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['src' => 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/' . $useVersion  . '/cookieconsent.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous', 'defer' => false];
        }

        return $data;
    }
}
