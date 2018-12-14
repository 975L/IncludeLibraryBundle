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
 * Data for Fontawesome Solid - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomesolid implements CssInterface, JavascriptInterface
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
                $integrity = 'sha384-aj0h5DVQ8jfwc8DA7JiM+Dysv7z+qYrFYZR+Qd/TwnmpDI6UaB3GJRRTdY8jYGS4';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-COsgLGwf6vbsibKzWojSqhIjQND/Sa0RWQ5BHFrKOz5JrUObnh5GEBUH2oZwITuM';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-uKQOWcYZKOuKmpYpvT0xCFAs/wE157X5Ua3H5onoRAOCNkJAMX/6QF0iXGGQV9cP';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-osqezT+30O6N/vsMqwW8Ch6wKlMofqueuia2H7fePy42uC05rm1G+BUPSd2iBSJL';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-S2gVFTIn1tJ/Plf+40+RRAxBCiBU5oAMFUJxTXT3vOlxtXm7MGjVj62mDpbujs4C';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-VxweGom9fDoUf7YfLTHgO0r70LVNHP5+Oi8dcR4hbEjS8UnpRtrwTx7LpHq/MWLI';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-HTDlLIcgXajNzMJv5hiW5s2fwegQng6Hi+fN6t5VAcwO/9qbg2YEANIyKBlqLsiT';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-29Ax2Ao1SMo9Pz5CxU1KMYy+aRLHmOu6hJKgWiViCYpz3f9egAJNwjnKGgr+BXDN';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-GfC9nfESTZkjCPFbevBVig3FTd6wkjRRYMtj+qFgK8mMBvGIje2rrALgiBy6pwRL';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-g2aKxiZcFezoVOq4MsjaxuBbSxSlXD/NRQ5GaPLfvCtcTLgP3fYZKKAGxCM/wMfe';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $version  . '/css/solid.css',
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
                $integrity = 'sha384-8Lgyylu0vfTGCXDKe435hJgX8s96c19R+dvpH0NHKdX47GA7TmMj+BDiZZ76qqhT';
                break;

            case '5.6.0':
            case '5.6.0.*':
                $version = '5.6.0';
                $integrity = 'sha384-akyniW0Jfrt1Z7kvRmaF2fkq9vuVQAPEGN4qq7s17l9PG3zz7FThoWnfVxpvnUn9';
                break;

            case '5.5.*':
            case '5.5.0':
            case '5.5.0.*':
                $version = '5.5.0';
                $integrity = 'sha384-Xgf/DMe1667bioB9X1UM5QX+EG6FolMT4K7G+6rqNZBSONbmPh/qZ62nBPfTx+xG';
                break;

            case '5.4.*':
            case '5.4.2':
            case '5.4.2.*':
                $version = '5.4.2';
                $integrity = 'sha384-OQNCj138epg9A13jaL9L/d5vMlK2jyPL4aOgi37KYt07aZARbv/eFGp/wnrCxkW5';
                break;

            case '5.4.1':
            case '5.4.1.*':
                $version = '5.4.1';
                $integrity = 'sha384-agDKwSYPuGlC0wD14lKXXwb94jlUkbkoSugquwmKRKWv/nDXe1kApDS/gqUlRQmZ';
                break;

            case '5.3.*':
            case '5.3.1':
            case '5.3.1.*':
                $version = '5.3.1';
                $integrity = 'sha384-GJiigN/ef2B3HMj0haY+eMmG4EIIrhWgGJ2Rv0IaWnNdWdbWPr1sRLkGz7xfjOFw';
                break;

            case '5.2.*':
            case '5.2.0':
            case '5.2.0.*':
                $version = '5.2.0';
                $integrity = 'sha384-YmNA3b9AQuWW8KZguYfqJa/YhKNTwGVD5pQc1cN0ZAVRudFFtR17HR7rooNcVXe4';
                break;

            case '5.1.*':
            case '5.1.1':
            case '5.1.1.*':
                $version = '5.1.1';
                $integrity = 'sha384-GXi56ipjsBwAe6v5X4xSrVNXGOmpdJYZEEh/0/GqJ3JTHsfDsF8v0YQvZCJYAiGu';
                break;

            case '5.1.0':
            case '5.1.0.*':
                $version = '5.1.0';
                $integrity = 'sha384-Z7p3uC4xXkxbK7/4keZjny0hTCWPXWfXl/mJ36+pW7ffAGnXzO7P+iCZ0mZv5Zt0';
                break;

            case '5.0.*':
            case '5.0.13':
            case '5.0.13.*':
                $version = '5.0.13';
                $integrity = 'sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ';
                break;

            case '5.0.12':
            case '5.0.12.*':
                $version = '5.0.12';
                $integrity = 'sha384-652/z7yNdGONCCBu0u5h5uF9voJhBdgruAuIDVheEaQ7O/ZC9wyyV+yZsYb32Wy7';
                break;

            case '5.0.10':
            case '5.0.10.*':
                $version = '5.0.10';
                $integrity = 'sha384-Q7KAHqDd5trmfsv85beYZBsUmw0lsreFBQZfsEhzUtUn5HhpjVzwY0Aq4z8DY9sA';
                break;

            case '5.0.9':
            case '5.0.9.*':
                $version = '5.0.9';
                $integrity = 'sha384-P4tSluxIpPk9wNy8WSD8wJDvA8YZIkC6AQ+BfAFLXcUZIPQGu4Ifv4Kqq+i2XzrM';
                break;

            case '5.0.8':
            case '5.0.8.*':
                $version = '5.0.8';
                $integrity = 'sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l';
                break;

            case '5.0.6':
            case '5.0.6.*':
                $version = '5.0.6';
                $integrity = 'sha384-U0ZJ7q5xbT8hEoRqj61HzpvsqNOQ8bsHY2VqSRPqGOzjHXmmV70Aw+DBC/PT00p4';
                break;

            case '5.0.4':
            case '5.0.4.*':
                $version = '5.0.4';
                $integrity = 'sha384-4KkAk2UXMS9Xl3FoAAN43VJxRZ/emjElCz60xUTegPOZlbPLZGylvor2v7wQ0JNb';
                break;

            default:
                $data = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $version  . '/js/solid.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}