<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\CssInterface;
use c975L\IncludeLibraryBundle\Libraries\JavascriptInterface;

/*
 * Fontawesome - https://fontawesome.com
 */
class Fontawesomebase implements CssInterface, JavascriptInterface
{
    /*
     * Refer to README.md for how-to add versions
     */
    public function getCss($version)
    {
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.1.1/css/fontawesome.css',
                    'integrity' => 'sha384-0b7ERybvrT5RZyD80ojw6KNKz6nIAlgOKXIcJ0CV7A6Iia8yt2y1bBfLBOwoc9fQ',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.0':
            case '5.1.0.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css',
                    'integrity' => 'sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.13/css/fontawesome.css',
                    'integrity' => 'sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.12':
            case '5.0.12.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.12/css/fontawesome.css',
                    'integrity' => 'sha384-rnr8fdrJ6oj4zli02To2U/e6t1qG8dvJ8yNZZPsKHcU7wFK3MGilejY5R/cUc5kf',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.10/css/fontawesome.css',
                    'integrity' => 'sha384-8WwquHbb2jqa7gKWSoAwbJBV2Q+/rQRss9UXL5wlvXOZfSodONmVnifo/+5xJIWX',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.9/css/fontawesome.css',
                    'integrity' => 'sha384-Lyz+8VfV0lv38W729WFAmn77iH5OSroyONnUva4+gYaQTic3iI2fnUKtDSpbVf0J',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css',
                    'integrity' => 'sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P',
                    'crossorigin' => 'anonymous',
                );
                break;

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
            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.1.1/js/fontawesome.js',
                    'integrity' => 'sha384-NY6PHjYLP2f+gL3uaVfqUZImmw71ArL9+Roi9o+I4+RBqArA2CfW1sJ1wkABFfPe',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.0':
            case '5.1.0.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.1.0/js/fontawesome.js',
                    'integrity' => 'sha384-juNb2Ils/YfoXkciRFz//Bi34FN+KKL2AN4R/COdBOMD9/sV/UsxI6++NqifNitM',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js',
                    'integrity' => 'sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.12':
            case '5.0.12.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.12/js/fontawesome.js',
                    'integrity' => 'sha384-6AOxTjzzZLvbTJayrLOYweuPckqh0rrB4Sj+Js8Vzgr85/qm2e0DRqi+rBzyK52J',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.10/js/fontawesome.js',
                    'integrity' => 'sha384-M2FSA4xMm1G9m4CNXM49UcDHeWcDZNucAlz1WVHxohug0Uw1K+IpUhp/Wjg0y6qG',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.9/js/fontawesome.js',
                    'integrity' => 'sha384-2IUdwouOFWauLdwTuAyHeMMRFfeyy4vqYNjodih+28v2ReC+8j+sLF9cK339k5hY',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js',
                    'integrity' => 'sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c',
                    'crossorigin' => 'anonymous',
                );
                break;

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