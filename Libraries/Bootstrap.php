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
     * {@inheritdoc}
     */
    public function getCss(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '4.*':
            case '4.3.*':
            case '4.3.1':
            case '4.3.1.*':
                $version = '4.3.1';
                $integrity = 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T';
                break;

            case '4.3.0':
            case '4.3.0.*':
                $version = '4.3.0';
                $integrity = 'sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA';
                break;

            case '4.2.*':
            case '4.2.1':
            case '4.2.1.*':
                $version = '4.2.1';
                $integrity = 'sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS';
                break;

            case '4.1.*':
            case '4.1.3':
            case '4.1.3.*':
                $version = '4.1.3';
                $integrity = 'sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO';
                break;

            case '4.1.2':
            case '4.1.2.*':
                $version = '4.1.2';
                $integrity = 'sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B';
                break;

            case '4.1.1':
            case '4.1.1.*':
                $version = '4.1.1';
                $integrity = 'sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB';
                break;

            case '4.1.0':
            case '4.1.0.*':
                $version = '4.1.0';
                $integrity = 'sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4';
                break;

            case '4.0.*':
            case '4.0.0':
            case '4.0.0.*':
                $version = '4.0.0';
                $integrity = 'sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm';
                break;

            case '3.*':
            case '3.4.*':
            case '3.4.1':
            case '3.4.1.*':
                $version = '3.4.1';
                $integrity = 'sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu';
                break;

            case '3.4.0':
            case '3.4.0.*':
                $version = '3.4.0';
                $integrity = 'sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+';
                break;

            case '3.3.*':
            case '3.3.7':
            case '3.3.7.*':
                $version = '3.3.7';
                $integrity = 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'href' => 'https://stackpath.bootstrapcdn.com/bootstrap/' . $version . '/css/bootstrap.min.css',
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

            case '4.*':
            case '4.3.*':
            case '4.3.1':
            case '4.3.1.*':
                $version = '4.3.1';
                $integrity = 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM';
                break;

            case '4.3.0':
            case '4.3.0.*':
                $version = '4.3.0';
                $integrity = 'sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp';
                break;

            case '4.2.*':
            case '4.2.1':
            case '4.2.1.*':
                $version = '4.2.1';
                $integrity = 'sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k';
                break;

            case '4.1.*':
            case '4.1.3':
            case '4.1.3.*':
                $version = '4.1.3';
                $integrity = 'sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy';
                break;

            case '4.1.2':
            case '4.1.2.*':
                $version = '4.1.2';
                $integrity = 'sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em';
                break;

            case '4.1.1':
            case '4.1.1.*':
                $version = '4.1.1';
                $integrity = 'sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T';
                break;

            case '4.1.0':
            case '4.1.0.*':
                $version = '4.1.0';
                $integrity = 'sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm';
                break;

            case '4.0.*':
            case '4.0.0':
            case '4.0.0.*':
                $version = '4.0.0';
                $integrity = 'sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl';
                break;

            case '3.*':
            case '3.4.*':
            case '3.4.1':
            case '3.4.1.*':
                $version = '3.4.1';
                $integrity = 'sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd';
                break;

            case '3.4.0':
            case '3.4.0.*':
                $version = '3.4.0';
                $integrity = 'sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw';
                break;

            case '3.3.*':
            case '3.3.7':
            case '3.3.7.*':
                $version = '3.3.7';
                $integrity = 'sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://maxcdn.bootstrapcdn.com/bootstrap/' . $version  . '/js/bootstrap.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
                'defer' => false,
            );
        }

        return $data;
    }
}
