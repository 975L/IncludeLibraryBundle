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
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'stable':
            case 'latest':
            case '5.*':
                $data = array(
                    'src' => 'https://cdn.tiny.cloud/1/API-KEY/tinymce/5/tinymce.min.js',
                    'defer' => false,
                    );
                break;

            case '4.*':
                $data = array(
                    'src' => 'https://cloud.tinymce.com/stable/tinymce.min.js',
                    'defer' => false,
                    );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}