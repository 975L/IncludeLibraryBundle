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
 * Data for jQuery Slim - https://code.jquery.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Jqueryslim implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '3.*':
            case '3.4.*':
            case '3.4.1':
            case '3.4.1.*':
                $version = '3.4.1';
                $integrity = 'sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=';
                break;

            case '3.4.0':
            case '3.4.0.*':
                $version = '3.4.0';
                $integrity = 'sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=';
                break;

            case '3.3.*':
            case '3.3.1':
            case '3.3.1.*':
                $version = '3.3.1';
                $integrity = 'sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=';
                break;

            case '3.3.0':
            case '3.3.0.*':
                $version = '3.3.0';
                $integrity = 'sha256-AMg3I7ya76OLPD9M+Mk7kqrA29HUn/FuGBfT/9Uf9ls=';
                break;

            case '3.2.*':
            case '3.2.1':
            case '3.2.1.*':
                $version = '3.2.1';
                $integrity = 'sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=';
                break;

            case '3.2.0':
            case '3.2.0.*':
                $version = '3.2.0';
                $integrity = 'sha256-qLAv0kBAihcHZLI3fv3WITKeRsUX27hd6upBBa0MSow=';
                break;

            case '3.1.*':
            case '3.1.1':
            case '3.1.1.*':
                $version = '3.1.1';
                $integrity = 'sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=';
                break;

            case '3.1.0':
            case '3.1.0.*':
                $version = '3.1.0';
                $integrity = 'sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=';
                break;

            case '3.0.*':
            case '3.0.0':
            case '3.0.0.*':
                $version = '3.0.0';
                $integrity = 'sha256-Rf4BadfyCtsvHmO89BUZcbYvNNvZvOT08ALfEzvCsD0=';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://code.jquery.com/jquery-' . $version  . '.slim.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}