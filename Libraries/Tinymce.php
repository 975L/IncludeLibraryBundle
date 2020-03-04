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
 * Data for Tinymce - https://www.tinymce.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Tinymce implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = array(
            'stable' => '5',
            'latest' => '5',

            '5.*' => '5',
            '4.*' => '4',
        );

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
        $integrities = array(
            '5' => '',
            '4' => '',
        );

        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://cdn.tiny.cloud/1/API-KEY/tinymce/5/tinymce.min.js',
                'defer' => false,
            );

            if ('4' === $useVersion) {
                $data = array(
                    'src' => 'https://cloud.tinymce.com/stable/tinymce.min.js',
                    'defer' => false,
                );
        }

        return $data;
    }
}
