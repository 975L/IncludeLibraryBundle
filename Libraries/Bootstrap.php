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
 * Bootstrap - http://getbootstrap.com
 */
class Bootstrap
{
    public function getData($type, $version)
    {
        //Gets css
        if ($type == 'css') {
            return $this->getCss($version);
        //Gets javascript
        } elseif ($type == 'javascript') {
            return $this->getJavascript($version);
        }

        return;
    }

    /*
     * Refer to README.md for how-to add versions/library
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':
            case '3.*':
            case '3.3.*':
            case '3.3.7':
            case '3.3.7.*':
                $data = array(
                    'href' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
                    'integrity' => 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u',
                    'crossorigin' => 'anonymous',
                );
                break;
            default:
                $data = '';
                break;
        }

        return $data;
    }

    /*
     * Refer to README.md for how-to add versions/library
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':
            case '3.*':
            case '3.3.*':
            case '3.3.7':
            case '3.3.7.*':
                $data = array(
                    'src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
                    'integrity' => 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa',
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