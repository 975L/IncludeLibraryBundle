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
 * Data for Fontawesome Solid - https://fontawesome.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Fontawesomesolid implements CssInterface, JavascriptInterface
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
            '5.6.1' => 'sha384-aj0h5DVQ8jfwc8DA7JiM+Dysv7z+qYrFYZR+Qd/TwnmpDI6UaB3GJRRTdY8jYGS4',
            '5.6.0' => 'sha384-COsgLGwf6vbsibKzWojSqhIjQND/Sa0RWQ5BHFrKOz5JrUObnh5GEBUH2oZwITuM',
            '5.5.0' => 'sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos',
            '5.4.2' => 'sha384-uKQOWcYZKOuKmpYpvT0xCFAs/wE157X5Ua3H5onoRAOCNkJAMX/6QF0iXGGQV9cP',
            '5.4.1' => 'sha384-osqezT+30O6N/vsMqwW8Ch6wKlMofqueuia2H7fePy42uC05rm1G+BUPSd2iBSJL',
            '5.3.1' => 'sha384-VGP9aw4WtGH/uPAOseYxZ+Vz/vaTb1ehm1bwx92Fm8dTrE+3boLfF1SpAtB1z7HW',
            '5.2.0' => 'sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z',
            '5.1.1' => 'sha384-S2gVFTIn1tJ/Plf+40+RRAxBCiBU5oAMFUJxTXT3vOlxtXm7MGjVj62mDpbujs4C',
            '5.1.0' => 'sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp',
            '5.0.13' => 'sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe',
            '5.0.12' => 'sha384-VxweGom9fDoUf7YfLTHgO0r70LVNHP5+Oi8dcR4hbEjS8UnpRtrwTx7LpHq/MWLI',
            '5.0.10' => 'sha384-HTDlLIcgXajNzMJv5hiW5s2fwegQng6Hi+fN6t5VAcwO/9qbg2YEANIyKBlqLsiT',
            '5.0.9' => 'sha384-29Ax2Ao1SMo9Pz5CxU1KMYy+aRLHmOu6hJKgWiViCYpz3f9egAJNwjnKGgr+BXDN',
            '5.0.8' => 'sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk',
            '5.0.6' => 'sha384-GfC9nfESTZkjCPFbevBVig3FTd6wkjRRYMtj+qFgK8mMBvGIje2rrALgiBy6pwRL',
            '5.0.4' => 'sha384-g2aKxiZcFezoVOq4MsjaxuBbSxSlXD/NRQ5GaPLfvCtcTLgP3fYZKKAGxCM/wMfe',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'href' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/css/solid.css',
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
            '5.6.1' => 'sha384-8Lgyylu0vfTGCXDKe435hJgX8s96c19R+dvpH0NHKdX47GA7TmMj+BDiZZ76qqhT',
            '5.6.0' => 'sha384-akyniW0Jfrt1Z7kvRmaF2fkq9vuVQAPEGN4qq7s17l9PG3zz7FThoWnfVxpvnUn9',
            '5.5.0' => 'sha384-Xgf/DMe1667bioB9X1UM5QX+EG6FolMT4K7G+6rqNZBSONbmPh/qZ62nBPfTx+xG',
            '5.4.2' => 'sha384-OQNCj138epg9A13jaL9L/d5vMlK2jyPL4aOgi37KYt07aZARbv/eFGp/wnrCxkW5',
            '5.4.1' => 'sha384-agDKwSYPuGlC0wD14lKXXwb94jlUkbkoSugquwmKRKWv/nDXe1kApDS/gqUlRQmZ',
            '5.3.1' => 'sha384-GJiigN/ef2B3HMj0haY+eMmG4EIIrhWgGJ2Rv0IaWnNdWdbWPr1sRLkGz7xfjOFw',
            '5.2.0' => 'sha384-YmNA3b9AQuWW8KZguYfqJa/YhKNTwGVD5pQc1cN0ZAVRudFFtR17HR7rooNcVXe4',
            '5.1.1' => 'sha384-GXi56ipjsBwAe6v5X4xSrVNXGOmpdJYZEEh/0/GqJ3JTHsfDsF8v0YQvZCJYAiGu',
            '5.1.0' => 'sha384-Z7p3uC4xXkxbK7/4keZjny0hTCWPXWfXl/mJ36+pW7ffAGnXzO7P+iCZ0mZv5Zt0',
            '5.0.13' => 'sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ',
            '5.0.12' => 'sha384-652/z7yNdGONCCBu0u5h5uF9voJhBdgruAuIDVheEaQ7O/ZC9wyyV+yZsYb32Wy7',
            '5.0.10' => 'sha384-Q7KAHqDd5trmfsv85beYZBsUmw0lsreFBQZfsEhzUtUn5HhpjVzwY0Aq4z8DY9sA',
            '5.0.9' => 'sha384-P4tSluxIpPk9wNy8WSD8wJDvA8YZIkC6AQ+BfAFLXcUZIPQGu4Ifv4Kqq+i2XzrM',
            '5.0.8' => 'sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l',
            '5.0.6' => 'sha384-U0ZJ7q5xbT8hEoRqj61HzpvsqNOQ8bsHY2VqSRPqGOzjHXmmV70Aw+DBC/PT00p4',
            '5.0.4' => 'sha384-4KkAk2UXMS9Xl3FoAAN43VJxRZ/emjElCz60xUTegPOZlbPLZGylvor2v7wQ0JNb',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://use.fontawesome.com/releases/v' . $useVersion  . '/js/solid.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}
