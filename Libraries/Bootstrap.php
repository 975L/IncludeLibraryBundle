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
 * Data for Bootstrap - https://getbootstrap.com - https://www.bootstrapcdn.com/legacy/bootstrap/
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Bootstrap implements CssInterface, JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = array(
            'latest' => '4.3.1',

            '4.*' => '4.3.1',
            '4.3.*' => '4.3.1',
            '4.3.1' => '4.3.1',
            '4.3.1.*' => '4.3.1',

            '4.3.0' => '4.3.0',
            '4.3.0.*' => '4.3.0',

            '4.2.*' => '4.2.1',
            '4.2.1' => '4.2.1',
            '4.2.1.*' => '4.2.1',

            '4.1.*' => '4.1.3',
            '4.1.3' => '4.1.3',
            '4.1.3.*' => '4.1.3',

            '4.1.2' => '4.1.2',
            '4.1.2.*' => '4.1.2',

            '4.1.1' => '4.1.1',
            '4.1.1.*' => '4.1.1',

            '4.1.0' => '4.1.0',
            '4.1.0.*' => '4.1.0',

            '4.0.*' => '4.0.0',
            '4.0.0' => '4.0.0',
            '4.0.0.*' => '4.0.0',

            '3.*' => '3.4.1',
            '3.4.*' => '3.4.1',
            '3.4.1' => '3.4.1',
            '3.4.1.*' => '3.4.1',

            '3.4.0' => '3.4.0',
            '3.4.0.*' => '3.4.0',

            '3.3.*' => '3.3.7',
            '3.3.7' => '3.3.7',
            '3.3.7.*' => '3.3.7',
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
            '4.3.1' => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T',
            '4.3.0' => 'sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA',
            '4.2.1' => 'sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS',
            '4.1.3' => 'sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO',
            '4.1.2' => 'sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B',
            '4.1.1' => 'sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB',
            '4.1.0' => 'sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4',
            '4.0.0' => 'sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm',
            '3.4.1' => 'sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu',
            '3.4.0' => 'sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+',
            '3.3.7' => 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'href' => 'https://stackpath.bootstrapcdn.com/bootstrap/' . $useVersion . '/css/bootstrap.min.css',
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
            '4.3.1' => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
            '4.3.0' => 'sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp',
            '4.2.1' => 'sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k',
            '4.1.3' => 'sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy',
            '4.1.2' => 'sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em',
            '4.1.1' => 'sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T',
            '4.1.0' => 'sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm',
            '4.0.0' => 'sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl',
            '3.4.1' => 'sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd',
            '3.4.0' => 'sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw',
            '3.3.7' => 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/' . $useVersion  . '/js/bootstrap.min.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}
