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
 * Data for Vue.js - https://vuejs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Vue implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = array(
            'stable' => 'latest',
            'latest' => 'latest',
        );

        if (isset($versions[$version])) {
            return $versions[$version];
        }

        return false;
    }


    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            'latest' => '',
        );

        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://cdn.jsdelivr.net/npm/vue',
                'crossorigin' => 'anonymous',
                'defer' => true,
            );
        }

        return $data;
    }
}
