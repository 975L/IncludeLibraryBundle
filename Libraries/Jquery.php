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
 * jQuery - https://jquery.com
 */
class Jquery
{
    public function getData($type, $version)
    {
        //Gets javascript
        if ($type == 'javascript') {
            return $this->getJavascript($version);
        }

        return;
    }

    public function getJavascript($version)
    {
        switch ($version) {
            case '3.2.1':
                $data = array(
                    'src' => 'https://code.jquery.com/jquery-3.2.1.min.js',
                    'integrity' => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=',
                    'crossorigin' => 'anonymous',
                );
                break;
            default:
                $data = '';
                break;
        }

        return $data;
    }
}