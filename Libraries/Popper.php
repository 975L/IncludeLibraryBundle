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
 * Data for Popper - https://popper.js.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Popper implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '1.*':
                $version = '';
                $integrity = '';
                break;

            case '1.14.*':
            case '1.14.6':
            case '1.14.6.*':
                $version = '@1.14.6';
                $integrity = 'sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut';
                break;

            case '1.14.5':
            case '1.14.5.*':
                $version = '@1.14.5';
                $integrity = 'sha384-a3GqK/TQoh+gPFAiesulJK7xiYNo3loQBWP1a68OkSUM5SqmmQxhzdMUGuNlAw3r';
                break;

            case '1.14.4':
            case '1.14.4.*':
                $version = '@1.14.4';
                $integrity = 'sha384-GM0Y80ecpwKxF1D5XCrGanKusGDy9WW0O2sSM84neB4iFhvKp3fwnoIRnPsQcN1R';
                break;

            case '1.14.3':
            case '1.14.3.*':
                $version = '@1.14.3';
                $integrity = 'sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49';
                break;

            case '1.14.2':
            case '1.14.2.*':
                $version = '@1.14.2';
                $integrity = 'sha384-AXEnX7PDLv+jdnMoormAUbt+QXfB3RKKzS6zZY474XEGvwG9uMHSCAsKGnslQULy';
                break;

            case '1.14.1':
            case '1.14.1.*':
                $version = '@1.14.1';
                $integrity = 'sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ';
                break;

            case '1.14.0':
            case '1.14.0.*':
                $version = '@1.14.0';
                $integrity = 'sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ';
                break;

            case '1.12.*':
            case '1.12.9':
            case '1.12.9.*':
                $version = '@1.12.9';
                $integrity = 'sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://unpkg.com/popper.js' . $version  . '/dist/umd/popper.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}