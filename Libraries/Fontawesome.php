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
 * Data for Fontawesome - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesome implements CssInterface, JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = array(
            'latest' => '5.12.1',

            '5.*' => '5.12.1',
            '5.12.*' => '5.12.1',
            '5.12.1' => '5.12.1',
            '5.12.1.*' => '5.12.1',

            '5.12.0' => '5.12.0',
            '5.12.0.*' => '5.12.0',

            '5.11.*' => '5.11.2',
            '5.11.2' => '5.11.2',
            '5.11.2.*' => '5.11.2',

            '5.11.1' => '5.11.1',
            '5.11.1.*' => '5.11.1',

            '5.11.0' => '5.11.0',
            '5.11.0.*' => '5.11.0',

            '5.10.*' => '5.10.2',
            '5.10.2' => '5.10.2',
            '5.10.2.*' => '5.10.2',

            '5.10.1' => '5.10.1',
            '5.10.1.*' => '5.10.1',

            '5.10.0' => '5.10.0',
            '5.10.0.*' => '5.10.0',

            '5.9.*' => '5.9.0',
            '5.9.0' => '5.9.0',
            '5.9.0.*' => '5.9.0',

            '5.8.*' => '5.8.2',
            '5.8.2' => '5.8.2',
            '5.8.2.*' => '5.8.2',

            '5.8.1' => '5.8.1',
            '5.8.1.*' => '5.8.1',

            '5.8.0' => '5.8.0',
            '5.8.0.*' => '5.8.0',

            '5.7.*' => '5.7.2',
            '5.7.2' => '5.7.2',
            '5.7.2.*' => '5.7.2',

            '5.7.1' => '5.7.1',
            '5.7.1.*' => '5.7.1',

            '5.7.0' => '5.7.0',
            '5.7.0.*' => '5.7.0',

            '5.6.*' => '5.6.3',
            '5.6.3' => '5.6.3',
            '5.6.3.*' => '5.6.3',

            '5.6.1' => '5.6.1',
            '5.6.1.*' => '5.6.1',

            '5.6.0' => '5.6.0',
            '5.6.0.*' => '5.6.0',

            '5.5.*' => '5.5.0',
            '5.5.0' => '5.5.0',
            '5.5.0.*' => '5.5.0',

            '5.4.*' => '5.4.2',
            '5.4.2' => '5.4.2',
            '5.4.2.*' => '5.4.2',

            '5.4.1' => '5.4.1',
            '5.4.1.*' => '5.4.1',

            '5.3.*' => '5.3.1',
            '5.3.1' => '5.3.1',
            '5.3.1.*' => '5.3.1',

            '5.2.*' => '5.2.0',
            '5.2.0' => '5.2.0',
            '5.2.0.*' => '5.2.0',

            '5.1.*' => '5.1.1',
            '5.1.1' => '5.1.1',
            '5.1.1.*' => '5.1.1',

            '5.1.0' => '5.1.0',
            '5.1.0.*' => '',

            '5.0.*' => '5.0.13',
            '5.0.13' => '5.0.13',
            '5.0.13.*' => '5.0.13',

            '5.0.12' => '5.0.12',
            '5.0.12.*' => '5.0.12',

            '5.0.10' => '5.0.10',
            '5.0.10.*' => '5.0.10',

            '5.0.9' => '5.0.9',
            '5.0.9.*' => '5.0.9',

            '5.0.8' => '5.0.8',
            '5.0.8.*' => '5.0.8',

            '5.0.6' => '5.0.6',
            '5.0.6.*' => '5.0.6',

            '5.0.4' => '5.0.4',
            '5.0.4.*' => '5.0.4',
        );

        if (isset($versions[$version])) {
            return $versions[$version];
        }

        return false;
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
            '5.6.1' => 'sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP',
            '5.6.0' => 'sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h',
            '5.5.0' => 'sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU',
            '5.4.2' => 'sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns',
            '5.4.1' => 'sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz',
            '5.3.1' => 'sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU',
            '5.2.0' => 'sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ',
            '5.1.1' => 'sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ',
            '5.1.0' => 'sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt',
            '5.0.13' => 'sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp',
            '5.0.12' => 'sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9',
            '5.0.10' => 'sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg',
            '5.0.9' => 'sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1',
            '5.0.8' => 'sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S',
            '5.0.6' => 'sha384-VY3F8aCQDLImi4L+tPX4XjtiJwXDwwyXNbkH7SHts0Jlo85t1R15MlXVBKLNx+dj',
            '5.0.4' => 'sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/css/all.css',
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
            '5.6.1' => 'sha384-R5JkiUweZpJjELPWqttAYmYM1P3SNEJRM6ecTQF05pFFtxmCO+Y1CiUhvuDzgSVZ',
            '5.6.0' => 'sha384-z9ZOvGHHo21RqN5De4rfJMoAxYpaVoiYhuJXPyVmSs8yn20IE3PmBM534CffwSJI',
            '5.5.0' => 'sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0',
            '5.4.2' => 'sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN',
            '5.4.1' => 'sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7',
            '5.3.1' => 'sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB',
            '5.2.0' => 'sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy',
            '5.1.1' => 'sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a',
            '5.1.0' => 'sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9',
            '5.0.13' => 'sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe',
            '5.0.12' => 'sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR',
            '5.0.10' => 'sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+',
            '5.0.9' => 'sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl',
            '5.0.8' => 'sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ',
            '5.0.6' => 'sha384-0AJY8UERsBUKdWcyF3o2kisLKeIo6G4Tbd8Y6fbyw6qYmn4WBuqcvxokp8m2UzSD',
            '5.0.4' => 'sha384-nVi8MaibAtVMFZb4R1zHUW/DsTJpG/YwPknbGABVOgk5s6Vhopl6XQD/pTCG/DKB',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/js/all.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}
