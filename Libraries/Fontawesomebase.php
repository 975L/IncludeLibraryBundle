<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\Fontawesome;

/**
 * Data for Fontawesome Base - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomebase implements CssInterface, JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $fontawesome = new Fontawesome();

        return $fontawesome->getVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            '5.12.1' => '',
            '5.12.0' => '',
            '5.11.2' => '',
            '5.11.1' => '',
            '5.11.0' => '',
            '5.10.2' => '',
            '5.10.1' => '',
            '5.10.0' => '',
            '5.9.0' => '',
            '5.8.2' => '',
            '5.8.1' => '',
            '5.8.0' => '',
            '5.7.2' => '',
            '5.7.1' => '',
            '5.7.0' => '',
            '5.6.3' => '',
            '5.6.1' => 'sha384-WK8BzK0mpgOdhCxq86nInFqSWLzR5UAsNg0MGX9aDaIIrFWQ38dGdhwnNCAoXFxL',
            '5.6.0' => 'sha384-J4287OME5B0yzlP80TtfccOBwJJt6xiO2KS14V7z0mVCRwpz+71z7lwP4yoFbTnD',
            '5.5.0' => 'sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT',
            '5.4.2' => 'sha384-HU5rcgG/yUrsDGWsVACclYdzdCcn5yU8V/3V84zSrPDHwZEdjykadlgI6RHrxGrJ',
            '5.4.1' => 'sha384-BzCy2fixOYd0HObpx3GMefNqdbA7Qjcc91RgYeDjrHTIEXqiF00jKvgQG0+zY/7I',
            '5.3.1' => 'sha384-1rquJLNOM3ijoueaaeS5m+McXPJCGdr5HcA03/VHXxcp2kX2sUrQDmFc3jR5i/C7',
            '5.2.0' => 'sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6',
            '5.1.1' => 'sha384-0b7ERybvrT5RZyD80ojw6KNKz6nIAlgOKXIcJ0CV7A6Iia8yt2y1bBfLBOwoc9fQ',
            '5.1.0' => 'sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG',
            '5.0.13' => 'sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV',
            '5.0.12' => 'sha384-rnr8fdrJ6oj4zli02To2U/e6t1qG8dvJ8yNZZPsKHcU7wFK3MGilejY5R/cUc5kf',
            '5.0.10' => 'sha384-8WwquHbb2jqa7gKWSoAwbJBV2Q+/rQRss9UXL5wlvXOZfSodONmVnifo/+5xJIWX',
            '5.0.9' => 'sha384-Lyz+8VfV0lv38W729WFAmn77iH5OSroyONnUva4+gYaQTic3iI2fnUKtDSpbVf0J',
            '5.0.8' => 'sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P',
            '5.0.6' => 'sha384-dbkYY2NmVwxaFrr4gq04oVh6w39ovmevsgD80Il1Od3hwpgREqyPb3XqbpaSwN4x',
            '5.0.4' => 'sha384-xdTUmhbcetyLRVL4PAriRajOve+/5pjOiy5sJABnhXMcRMVc9HI9s2KmOCjjDK/P',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/css/fontawesome.css',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            '5.12.1' => '',
            '5.12.0' => '',
            '5.11.2' => '',
            '5.11.1' => '',
            '5.11.0' => '',
            '5.10.2' => '',
            '5.10.1' => '',
            '5.10.0' => '',
            '5.9.0' => '',
            '5.8.2' => '',
            '5.8.1' => '',
            '5.8.0' => '',
            '5.7.2' => '',
            '5.7.1' => '',
            '5.7.0' => '',
            '5.6.3' => '',
            '5.6.1' => 'sha384-T6YzYwAGZAItTIkYlBzfwqa07o9R1AND3Lgt6Or6c5IdukY7tqShoryqwpKrpeIB',
            '5.6.0' => 'sha384-tHFnt8QELQGC1IJzcTUX5zFEnn/FLVa0ADTmxRyeSmWukJ4umWnJbwiMTkw/bKEK',
            '5.5.0' => 'sha384-bNOdVeWbABef8Lh4uZ8c3lJXVlHdf8W5hh1OpJ4dGyqIEhMmcnJrosjQ36Kniaqm',
            '5.4.2' => 'sha384-n1qPouQQJ9VNZnZeNZWSDiclpIOJwZBS2bkD6rEX+DTmMXTKXBVCZw2cGbU/I17z',
            '5.4.1' => 'sha384-ISRc+776vRkDOTSbmnyoZFmwHy7hw2UR3KJpb4YtcfOyqUqhLGou8j5YmYnvQQJ4',
            '5.3.1' => 'sha384-2OfHGv4zQZxcNK+oL8TR9pA+ADXtUODqGpIRy1zOgioC4X3+2vbOAp5Qv7uHM4Z8',
            '5.2.0' => 'sha384-QcnrgQuRmocjIBY6ByWMmDvUg3HO4MSdVjY7ynJwZfvTDhVPPQOUI9TRzc6/7ZO1',
            '5.1.1' => 'sha384-NY6PHjYLP2f+gL3uaVfqUZImmw71ArL9+Roi9o+I4+RBqArA2CfW1sJ1wkABFfPe',
            '5.1.0' => 'sha384-juNb2Ils/YfoXkciRFz//Bi34FN+KKL2AN4R/COdBOMD9/sV/UsxI6++NqifNitM',
            '5.0.13' => 'sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY',
            '5.0.12' => 'sha384-6AOxTjzzZLvbTJayrLOYweuPckqh0rrB4Sj+Js8Vzgr85/qm2e0DRqi+rBzyK52J',
            '5.0.10' => 'sha384-M2FSA4xMm1G9m4CNXM49UcDHeWcDZNucAlz1WVHxohug0Uw1K+IpUhp/Wjg0y6qG',
            '5.0.9' => 'sha384-2IUdwouOFWauLdwTuAyHeMMRFfeyy4vqYNjodih+28v2ReC+8j+sLF9cK339k5hY',
            '5.0.8' => 'sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c',
            '5.0.6' => 'sha384-rttr/ldR2uHigckjTCjMDe47ySeFVaL3Q7xUkJZir56u8Z8h/XnHJXHocgyfb25F',
            '5.0.4' => 'sha384-l7FyBM+wFIWpfmy8RYkWgEu/Me6Hrz98ijLu4nP3PkGbTtTCvtHB5ktI8hLEgEG3',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/js/fontawesome.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}
