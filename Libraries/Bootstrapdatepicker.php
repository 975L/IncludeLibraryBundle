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
     * {@inheritdoc}
     */
    public function getCss(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '1.*':
            case '1.8.*':
            case '1.8.0':
            case '1.8.0.*':
                $version = '1.8.0';
                $integrity = 'sha384-UIjefFM/glLb4CFCVO/HC3zB9vuP1A5U/5PnGWifE037WUTJ/7BRi25dkmJBqZPa';
                break;

            case '1.7.*':
            case '1.7.1':
            case '1.7.1.*':
                $version = '1.7.1';
                $integrity = 'sha384-v7OXjsQNUteMoQ8IjcHUr8dUe6KjmnT7POLvMclVMu83Hl3HkJ7CyPgMJOYuLhTQ';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/' . $version . '/css/bootstrap-datepicker.css',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '1.*':
            case '1.8.*':
            case '1.8.0':
            case '1.8.0.*':
                $version = '1.8.0';
                $integrity = 'sha384-vtZXrrXR60MGoprJb7ApH4t3Y59IhePhwtXXmbqg//ha9LHwSo3QCNR6XvF5oXVM';
                break;

            case '1.7.*':
            case '1.7.1':
            case '1.7.1.*':
                $version = '1.7.1';
                $integrity = 'sha384-w48xMCwgWQu0zb3PvQI/rK5lfN6G+lSWu+qI4ukKZg3I5Xx3/VWA8IiaQ8O7tZur';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/' . $version  . '/js/bootstrap-datepicker.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}