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
 * Data for jQuery - https://code.jquery.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Jquery implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = array(
            'latest' => '3.4.1',

            '3.*' => '3.4.1',
            '3.4.*' => '3.4.1',
            '3.4.1' => '3.4.1',
            '3.4.1.*' => '3.4.1',

            '3.4.0' => '3.4.0',
            '3.4.0.*' => '3.4.0',

            '3.3.*' => '3.3.1',
            '3.3.1' => '3.3.1',
            '3.3.1.*' => '3.3.1',

            '3.3.0' => '3.3.0',
            '3.3.0.*' => '3.3.0',

            '3.2.*' => '3.2.1',
            '3.2.1' => '3.2.1',
            '3.2.1.*' => '3.2.1',

            '3.2.0' => '3.2.0',
            '3.2.0.*' => '3.2.0',

            '3.1.*' => '3.1.1',
            '3.1.1' => '3.1.1',
            '3.1.1.*' => '3.1.1',

            '3.1.0' => '3.1.0',
            '3.1.0.*' => '3.1.0',

            '3.0.*' => '3.0.0',
            '3.0.0' => '3.0.0',
            '3.0.0.*' => '3.0.0',

            '2.*' => '2.2.4',
            '2.2.*' => '2.2.4',
            '2.2.4' => '2.2.4',
            '2.2.4.*' => '2.2.4',
        );

        if (isset($versions[$version])) {
            return $versions[$version];
        }

        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = array(
            '3.4.1' => 'sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=',
            '3.4.0' => 'sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=',
            '3.3.1' => 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=',
            '3.3.0' => 'sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=',
            '3.2.1' => 'sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=',
            '3.2.0' => 'sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=',
            '3.1.1' => 'sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=',
            '3.1.0' => 'sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=',
            '3.0.0' => 'sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=',
            '2.2.4' => 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://code.jquery.com/jquery-' . $useVersion  . '.min.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}
