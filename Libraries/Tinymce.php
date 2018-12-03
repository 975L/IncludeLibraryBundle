<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\JavascriptInterface;

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
    public function getJavascript(string $version)
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