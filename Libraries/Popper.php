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
 * Data for Popper - https://popper.js.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Popper implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
                $data = array(
                    'src' => 'https://unpkg.com/popper.js/dist/umd/popper.min.js',
                );
                break;

            case '1.14.*':
            case '1.14.3':
            case '1.14.3.*':
                $data = array(
                    'src' => 'https://unpkg.com/popper.js@1.14.3/dist/umd/popper.min.js',
                );
                break;

            case '1.14.0':
            case '1.14.0.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js',
                    'integrity' => 'sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '1.12.*':
            case '1.12.9':
            case '1.12.9.*':
                $data = array(
                    'src' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
                    'integrity' => 'sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q',
                    'crossorigin' => 'anonymous',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}