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
 * Tinymce - https://www.tinymce.com
 */
class Tinymce
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case 'stable':
                $data = array(
                    'src' => 'https://cloud.tinymce.com/stable/tinymce.min.js',
                    );
                break;

            default:
                $data = null;
                break;
        }

        //Removes defer attribute
        $data['defer'] = false;

        return $data;
    }
}