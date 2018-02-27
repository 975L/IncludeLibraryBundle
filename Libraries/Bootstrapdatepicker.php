<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

/*
 * Bootstrap DatePicker - https://github.com/uxsolutions/bootstrap-datepicker
 */
class Bootstrapdatepicker
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
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

    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
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