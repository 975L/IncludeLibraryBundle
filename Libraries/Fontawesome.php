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
            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.2.0/css/all.css',
                    'integrity' => 'sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.1.1/css/all.css',
                    'integrity' => 'sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.0':
            case '5.1.0.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.1.0/css/all.css',
                    'integrity' => 'sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.13/css/all.css',
                    'integrity' => 'sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.12':
            case '5.0.12.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.12/css/all.css',
                    'integrity' => 'sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.10/css/all.css',
                    'integrity' => 'sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.9/css/all.css',
                    'integrity' => 'sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.8/css/all.css',
                    'integrity' => 'sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.6/css/all.css',
                    'integrity' => 'sha384-VY3F8aCQDLImi4L+tPX4XjtiJwXDwwyXNbkH7SHts0Jlo85t1R15MlXVBKLNx+dj',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'href' => 'https://use.fontawesome.com/releases/v5.0.4/css/all.css',
                    'integrity' => 'sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh',
                    'crossorigin' => 'anonymous',
                );
                break;

            default:
                $data = null;
                break;
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
            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.2.0/js/all.js',
                    'integrity' => 'sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.1.1/js/all.js',
                    'integrity' => 'sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.1.0':
            case '5.1.0.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.1.0/js/all.js',
                    'integrity' => 'sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.13/js/all.js',
                    'integrity' => 'sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.12':
            case '5.0.12.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.12/js/all.js',
                    'integrity' => 'sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.10':
            case '5.0.10.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.10/js/all.js',
                    'integrity' => 'sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.9':
            case '5.0.9.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.9/js/all.js',
                    'integrity' => 'sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.8':
            case '5.0.8.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.8/js/all.js',
                    'integrity' => 'sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.6':
            case '5.0.6.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.6/js/all.js',
                    'integrity' => 'sha384-0AJY8UERsBUKdWcyF3o2kisLKeIo6G4Tbd8Y6fbyw6qYmn4WBuqcvxokp8m2UzSD',
                    'crossorigin' => 'anonymous',
                );
                break;

            case '5.0.4':
            case '5.0.4.*':
                $data = array(
                    'src' => 'https://use.fontawesome.com/releases/v5.0.4/js/all.js',
                    'integrity' => 'sha384-nVi8MaibAtVMFZb4R1zHUW/DsTJpG/YwPknbGABVOgk5s6Vhopl6XQD/pTCG/DKB',
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