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
 * Data for Select2 - https://select2.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Select2 implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        switch ($version) {
            case 'latest':

            case '4.*':
            case '4.0.*':
            case '4.0.6':
            case '4.0.6.*':
                $version = '4.0.6-rc.0';
                $integrity = 'sha384-RdQbeSCGSeSdSlTMGnUr2oDJZzOuGjJAkQy1MbKMu8fZT5G0qlBajY0n0sY/hKMK';
                break;

            case '4.0.3':
            case '4.0.3.*':
                $version = '4.0.3';
                $integrity = 'sha384-HIipfSYbpCkh5/1V87AWAeR5SUrNiewznrUrtNz1ux4uneLhsAKzv/0FnMbj3m6g';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/' . $version . '/css/select2.min.css',
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }

    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '4.*':
            case '4.0.*':
            case '4.0.6':
            case '4.0.6.*':
                $version = '4.0.6-rc.0';
                $integrity = 'sha384-uQwKPrmNkEOvI7rrNdCSs6oS1F3GvnZkmPtkntOSIiPQN4CCbFSxv+Bj6qe0mWDb';
                break;

            case '4.0.3':
            case '4.0.3.*':
                $version = '4.0.3';
                $integrity = 'sha384-222hzbb8Z8ZKe6pzP18nTSltQM3PdcAwxWKzGOKOIF+Y3bROr5n9zdQ8yTRHgQkQ';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/' . $version  . '/js/select2.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}