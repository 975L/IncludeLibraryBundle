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
 * Data for Fontawesome Base - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomebase implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '5.*':
            case '5.12.*':
            case '5.12.1';
            case '5.12.1.*';
                $version = '5.12.1';
                $integrity = null;
                break;

            case '5.12.0';
            case '5.12.0.*';
                $version = '5.12.0';
                $integrity = null;
                break;

            case '5.11.*':
            case '5.11.2';
            case '5.11.2.*';
                $version = '5.11.2';
                $integrity = null;
                break;

            case '5.11.1';
            case '5.11.1.*';
                $version = '5.11.1';
                $integrity = null;
                break;

            case '5.11.0';
            case '5.11.0.*';
                $version = '5.11.0';
                $integrity = null;
                break;

            case '5.10.*':
            case '5.10.2';
            case '5.10.2.*';
                $version = '5.10.2';
                $integrity = null;
                break;

            case '5.10.1';
            case '5.10.1.*';
                $version = '5.10.1';
                $integrity = null;
                break;

            case '5.10.0';
            case '5.10.0.*';
                $version = '5.10.0';
                $integrity = null;
                break;

            case '5.9.*':
            case '5.9.0':
            case '5.9.0.*':
                $version = '5.9.0';
                $integrity = null;
                break;

            case '5.8.*':
            case '5.8.2':
            case '5.8.2.*':
                $version = '5.8.2';
                $integrity = null;
                break;

            case '5.8.1':
            case '5.8.1.*':
                $version = '5.8.1';
                $integrity = null;
                break;

            case '5.8.0':
            case '5.8.0.*':
                $version = '5.8.0';
                $integrity = null;
                break;

            case '5.7.*':
            case '5.7.2':
            case '5.7.2.*':
                $version = '5.7.2';
                $integrity = null;
                break;

            case '5.7.1':
            case '5.7.1.*':
                $version = '5.7.1';
                $integrity = null;
                break;

            case '5.7.0':
            case '5.7.0.*':
                $version = '5.7.0';
                $integrity = null;
                break;

            case '5.6.*':
            case '5.6.3':
            case '5.6.3.*':
                $version = '5.6.3';
                $integrity = null;
                break;

            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-WK8BzK0mpgOdhCxq86nInFqSWLzR5UAsNg0MGX9aDaIIrFWQ38dGdhwnNCAoXFxL';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-J4287OME5B0yzlP80TtfccOBwJJt6xiO2KS14V7z0mVCRwpz+71z7lwP4yoFbTnD';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-HU5rcgG/yUrsDGWsVACclYdzdCcn5yU8V/3V84zSrPDHwZEdjykadlgI6RHrxGrJ';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-BzCy2fixOYd0HObpx3GMefNqdbA7Qjcc91RgYeDjrHTIEXqiF00jKvgQG0+zY/7I';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-0b7ERybvrT5RZyD80ojw6KNKz6nIAlgOKXIcJ0CV7A6Iia8yt2y1bBfLBOwoc9fQ';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-rnr8fdrJ6oj4zli02To2U/e6t1qG8dvJ8yNZZPsKHcU7wFK3MGilejY5R/cUc5kf';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-8WwquHbb2jqa7gKWSoAwbJBV2Q+/rQRss9UXL5wlvXOZfSodONmVnifo/+5xJIWX';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-Lyz+8VfV0lv38W729WFAmn77iH5OSroyONnUva4+gYaQTic3iI2fnUKtDSpbVf0J';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-dbkYY2NmVwxaFrr4gq04oVh6w39ovmevsgD80Il1Od3hwpgREqyPb3XqbpaSwN4x';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-xdTUmhbcetyLRVL4PAriRajOve+/5pjOiy5sJABnhXMcRMVc9HI9s2KmOCjjDK/P';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $version  . '/css/fontawesome.css',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '5.*':
            case '5.12.*':
            case '5.12.1';
            case '5.12.1.*';
                $version = '5.12.1';
                $integrity = null;
                break;

            case '5.12.0';
            case '5.12.0.*';
                $version = '5.12.0';
                $integrity = null;
                break;

            case '5.11.*':
            case '5.11.2';
            case '5.11.2.*';
                $version = '5.11.2';
                $integrity = null;
                break;

            case '5.11.1';
            case '5.11.1.*';
                $version = '5.11.1';
                $integrity = null;
                break;

            case '5.11.0';
            case '5.11.0.*';
                $version = '5.11.0';
                $integrity = null;
                break;

            case '5.10.*':
            case '5.10.2';
            case '5.10.2.*';
                $version = '5.10.2';
                $integrity = null;
                break;

            case '5.10.1';
            case '5.10.1.*';
                $version = '5.10.1';
                $integrity = null;
                break;

            case '5.10.0';
            case '5.10.0.*';
                $version = '5.10.0';
                $integrity = null;
                break;

            case '5.9.*':
            case '5.9.0':
            case '5.9.0.*':
                $version = '5.9.0';
                $integrity = null;
                break;

            case '5.8.*':
            case '5.8.2':
            case '5.8.2.*':
                $version = '5.8.2';
                $integrity = null;
                break;

            case '5.8.1':
            case '5.8.1.*':
                $version = '5.8.1';
                $integrity = null;
                break;

            case '5.8.0':
            case '5.8.0.*':
                $version = '5.8.0';
                $integrity = null;
                break;

            case '5.7.*':
            case '5.7.2':
            case '5.7.2.*':
                $version = '5.7.2';
                $integrity = null;
                break;

            case '5.7.1':
            case '5.7.1.*':
                $version = '5.7.1';
                $integrity = null;
                break;

            case '5.7.0':
            case '5.7.0.*':
                $version = '5.7.0';
                $integrity = null;
                break;

            case '5.6.*':
            case '5.6.3':
            case '5.6.3.*':
                $version = '5.6.3';
                $integrity = null;
                break;

            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-T6YzYwAGZAItTIkYlBzfwqa07o9R1AND3Lgt6Or6c5IdukY7tqShoryqwpKrpeIB';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-tHFnt8QELQGC1IJzcTUX5zFEnn/FLVa0ADTmxRyeSmWukJ4umWnJbwiMTkw/bKEK';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-bNOdVeWbABef8Lh4uZ8c3lJXVlHdf8W5hh1OpJ4dGyqIEhMmcnJrosjQ36Kniaqm';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-n1qPouQQJ9VNZnZeNZWSDiclpIOJwZBS2bkD6rEX+DTmMXTKXBVCZw2cGbU/I17z';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-ISRc+776vRkDOTSbmnyoZFmwHy7hw2UR3KJpb4YtcfOyqUqhLGou8j5YmYnvQQJ4';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-2OfHGv4zQZxcNK+oL8TR9pA+ADXtUODqGpIRy1zOgioC4X3+2vbOAp5Qv7uHM4Z8';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-QcnrgQuRmocjIBY6ByWMmDvUg3HO4MSdVjY7ynJwZfvTDhVPPQOUI9TRzc6/7ZO1';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-NY6PHjYLP2f+gL3uaVfqUZImmw71ArL9+Roi9o+I4+RBqArA2CfW1sJ1wkABFfPe';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-juNb2Ils/YfoXkciRFz//Bi34FN+KKL2AN4R/COdBOMD9/sV/UsxI6++NqifNitM';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-6AOxTjzzZLvbTJayrLOYweuPckqh0rrB4Sj+Js8Vzgr85/qm2e0DRqi+rBzyK52J';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-M2FSA4xMm1G9m4CNXM49UcDHeWcDZNucAlz1WVHxohug0Uw1K+IpUhp/Wjg0y6qG';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-2IUdwouOFWauLdwTuAyHeMMRFfeyy4vqYNjodih+28v2ReC+8j+sLF9cK339k5hY';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-rttr/ldR2uHigckjTCjMDe47ySeFVaL3Q7xUkJZir56u8Z8h/XnHJXHocgyfb25F';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-l7FyBM+wFIWpfmy8RYkWgEu/Me6Hrz98ijLu4nP3PkGbTtTCvtHB5ktI8hLEgEG3';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $version  . '/js/fontawesome.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}