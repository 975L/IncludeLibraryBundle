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
 * Data for jQuery UI - https://jquery.com/ui
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Jqueryui implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = ['latest' => '1.12.1', '1.*' => '1.12.1', '1.12.*' => '1.12.1', '1.12.1' => '1.12.1', '1.12.1.*' => '1.12.1'];

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
        $integrities = ['1.12.1' => 'sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU='];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['src' => 'https://code.jquery.com/ui/' . $useVersion  . '/jquery-ui.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous'];
        }

        return $data;
    }
}
