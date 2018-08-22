<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\CssInterface;
use c975L\IncludeLibraryBundle\Libraries\JavascriptInterface;

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
    public function getCss(string $version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
            case '1.8.*':
            case '1.8.0':
            case '1.8.0.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css',
                );
                break;

            case '1.7.*':
            case '1.7.1':
            case '1.7.1.*':
                $data = array(
                    'href' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
            case '1.8.*':
            case '1.8.0':
            case '1.8.0.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js',
                );
                break;

            case '1.7.*':
            case '1.7.1':
            case '1.7.1.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}