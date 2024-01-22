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
 * Data for Bootstrap DatePicker - https://cdnjs.com/libraries/bootstrap-datepicker
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Bootstrapdatepicker implements CssInterface, JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = ['latest' => '1.8.0', '1.*' => '1.8.0', '1.8.*' => '1.8.0', '1.8.0' => '1.8.0', '1.8.0.*' => '1.8.0', '1.7.*' => '1.7.1', '1.7.1' => '1.7.1', '1.7.1.*' => '1.7.1'];

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
        $integrities = ['1.8.0' => 'sha384-UIjefFM/glLb4CFCVO/HC3zB9vuP1A5U/5PnGWifE037WUTJ/7BRi25dkmJBqZPa', '1.7.1' => 'sha384-v7OXjsQNUteMoQ8IjcHUr8dUe6KjmnT7POLvMclVMu83Hl3HkJ7CyPgMJOYuLhTQ'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/' . $useVersion . '/css/bootstrap-datepicker.css', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous'];
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
        $integrities = ['1.8.0' => 'sha384-vtZXrrXR60MGoprJb7ApH4t3Y59IhePhwtXXmbqg//ha9LHwSo3QCNR6XvF5oXVM', '1.7.1' => 'sha384-w48xMCwgWQu0zb3PvQI/rK5lfN6G+lSWu+qI4ukKZg3I5Xx3/VWA8IiaQ8O7tZur'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/' . $useVersion  . '/js/bootstrap-datepicker.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous', 'defer' => false];
        }

        return $data;
    }
}