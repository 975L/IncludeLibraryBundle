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
 * Data for AngularJS - https://angularjs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Angular implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
            case '1.7.*':
            case '1.7.2':
            case '1.7.2.*':
                $data = array(
                    'src' => 'https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js',
                break;

            case '1.2.*':
            case '1.2.32':
            case '1.2.32.*':
                $data = array(
                    'src' => 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js',
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}