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
 * Data for jQuery - https://code.jquery.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Jquery implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '3.*':
            case '3.3.*':
            case '3.3.1':
            case '3.3.1.*':
                $version = '3.3.1';
                $integrity = 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=';
                break;

            case '3.3.0':
            case '3.3.0.*':
                $version = '3.3.0';
                $integrity = 'sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=';
                break;

            case '3.2.*':
            case '3.2.1':
            case '3.2.1.*':
                $version = '3.2.1';
                $integrity = 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=';
                break;

            case '3.2.0':
            case '3.2.0.*':
                $version = '3.2.0';
                $integrity = 'sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=';
                break;

            case '3.1.*':
            case '3.1.1':
            case '3.1.1.*':
                $version = '3.1.1';
                $integrity = 'sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=';
                break;

            case '3.1.0':
            case '3.1.0.*':
                $version = '3.1.0';
                $integrity = 'sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=';
                break;

            case '3.0.*':
            case '3.0.0':
            case '3.0.0.*':
                $version = '3.0.0';
                $integrity = 'sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=';
                break;

            case '2.*':
            case '2.2.*':
            case '2.2.4':
            case '2.2.4.*':
                $version = '2.2.4';
                $integrity = 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://code.jquery.com/jquery-' . $version  . '.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}