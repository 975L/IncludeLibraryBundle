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
class Fontawesomebase
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.0.*':
            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css',
                    'integrity' => 'sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.6/css/fontawesome.css',
                    'integrity' => 'sha384-dbkYY2NmVwxaFrr4gq04oVh6w39ovmevsgD80Il1Od3hwpgREqyPb3XqbpaSwN4x',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.4/css/fontawesome.css',
                    'integrity' => 'sha384-xdTUmhbcetyLRVL4PAriRajOve+/5pjOiy5sJABnhXMcRMVc9HI9s2KmOCjjDK/P',
                    'crossorigin' => 'anonymous',
                );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }

    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript($version)
    {
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.0.*':
            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js',
                    'integrity' => 'sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c',
                    'crossorigin' => 'anonymous',
                );

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.6/js/fontawesome.js',
                    'integrity' => 'sha384-rttr/ldR2uHigckjTCjMDe47ySeFVaL3Q7xUkJZir56u8Z8h/XnHJXHocgyfb25F',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.4/js/fontawesome.js',
                    'integrity' => 'sha384-l7FyBM+wFIWpfmy8RYkWgEu/Me6Hrz98ijLu4nP3PkGbTtTCvtHB5ktI8hLEgEG3',
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