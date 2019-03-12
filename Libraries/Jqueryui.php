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
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '1.*':
            case '1.12.*':
            case '1.12.1':
            case '1.12.1.*':
                $version = '1.12.1';
                $integrity = 'sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://code.jquery.com/ui/' . $version  . '/jquery-ui.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}