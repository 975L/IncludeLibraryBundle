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
 * Fontawesome - https://fontawesome.com
 */
class Fontawesome
{
    public function getData($type, $version)
    {
        //Gets css
        if ($type == 'css') {
            return $this->getCss($version);
        }

        return;
    }

    public function getCss($version)
    {
        switch ($version) {
            case '5.0.6':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
                );
                break;
            default:
                $data = '';
                break;
        }

        return $data;
    }
}