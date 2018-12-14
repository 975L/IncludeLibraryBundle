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
 * Data for Bootstrap - https://getbootstrap.com - https://www.bootstrapcdn.com/legacy/bootstrap/
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Bootstrap implements CssInterface, JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCss(string $version)
    {
        switch ($version) {
            case 'latest':

            case '4.*':
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
    public function getJavascript(string $version)
    {
        switch ($version) {
            case 'latest':

            case '4.*':
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