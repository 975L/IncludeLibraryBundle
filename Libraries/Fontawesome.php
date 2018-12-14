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

/**
 * Data for Fontawesome - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesome implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.6.*':
            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-VY3F8aCQDLImi4L+tPX4XjtiJwXDwwyXNbkH7SHts0Jlo85t1R15MlXVBKLNx+dj';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $version  . '/css/all.css',
                'integrity' => $integrity,
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
        switch ($version) {
            case 'latest':

            case '5.*':
            case '5.6.*':
            case '5.6.1':
            case '5.6.1.*':
                $version = '5.6.1';
                $integrity = 'sha384-R5JkiUweZpJjELPWqttAYmYM1P3SNEJRM6ecTQF05pFFtxmCO+Y1CiUhvuDzgSVZ';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-z9ZOvGHHo21RqN5De4rfJMoAxYpaVoiYhuJXPyVmSs8yn20IE3PmBM534CffwSJI';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-wp96dIgDl5BLlOXb4VMinXPNiB32VYBSoXOoiARzSTXY+tsK8yDTYfvdTyqzdGGN';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-0AJY8UERsBUKdWcyF3o2kisLKeIo6G4Tbd8Y6fbyw6qYmn4WBuqcvxokp8m2UzSD';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-nVi8MaibAtVMFZb4R1zHUW/DsTJpG/YwPknbGABVOgk5s6Vhopl6XQD/pTCG/DKB';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $version  . '/js/all.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}