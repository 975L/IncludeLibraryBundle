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
 * Data for React - https://reactjs.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class React implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($useVersion) {
            case 'latest':

            case '16.*':
                $version = '16';
                $integrity = '';
                break;

            case '16.6.*':
                $version = '16.6';
                $integrity = '';
                break;

            case '16.6.3':
            case '16.6.3.*':
                $version = '16.6.3';
                $integrity = 'sha384-iux0izj7Hd5A91m1k45xtV2Lt1RTPNZYUPLTElh/5icjzSS1YztZTlseuwlkcQqO';
                break;

            case '16.6.1':
            case '16.6.1.*':
                $version = '16.6.1';
                $integrity = 'sha384-DDVCZmwBefEya/gllSz8If5sgMKVowazItDhJzj18fAt2TaA6G2N6XPruKSt5uNj';
                break;

            case '16.6.0':
            case '16.6.0.*':
                $version = '16.6.0';
                $integrity = 'sha384-I3sR01Rko3zsR3HHXChatyBHIyrMRG5xVcHZrrrJEhC32Ww39Jv7u7emyipbOdG3';
                break;

            case '16.5.*':
                $version = '16.5';
                $integrity = '';
                break;

            case '16.5.2':
            case '16.5.2.*':
                $version = '16.5.2';
                $integrity = 'sha384-Yi0gacTNJqXkg0cW4aIcDYSxeByVmKiohsbG47CzKt4PzRHAvQZ5isIrry9EI5jq';
                break;

            case '16.5.1':
            case '16.5.1.*':
                $version = '16.5.1';
                $integrity = 'sha384-TxRtixpJUGd5aw9dGzHnvHChjvf+UiM8nFPmYT6LEWOM9gbijhTKGOPo8qepQFpp';
                break;

            case '16.5.0':
            case '16.5.0.*':
                $version = '16.5.0';
                $integrity = 'sha384-/d1+ajIp3eNRfbnoMBOkqBWZ0cV9I0393DxIjXsXi/fcOkg6JMNh03ir013b7WDo';
                break;

            case '16.4.*':
                $version = '16.4';
                $integrity = '';
                break;

            case '16.4.2':
            case '16.4.2.*':
                $version = '16.4.2';
                $integrity = 'sha384-h6QXRvNMHDNwdjUIA5y9qzljw7h6SV1AJRR4ccA3sVdKNJQ5fIaq1ozaxFi4oYJL';
                break;

            case '16.4.1':
            case '16.4.1.*':
                $version = '16.4.1';
                $integrity = 'sha384-nknFr2hIJEELeBc74Ig3GPXUXITBKkPCdvhYiaI9N/z4w29fBDju2T1Fa8UYtYXY';
                break;

            case '16.4.0':
            case '16.4.0.*':
                $version = '16.4.0';
                $integrity = 'sha384-v2idw2oCR9LMlpJYSzv6tmiCFVSFBuZYoQpbrE/bTouGWXr4xlFFuJtu8YCgwsSM';
                break;

            case '16.3.*':
                $version = '16.3';
                $integrity = '';
                break;

            case '16.3.2':
            case '16.3.2.*':
                $version = '16.3.2';
                $integrity = 'sha384-ssmDfleGSKwIS4GlKJM3gqgSQtp6pzFAc7y8f0r2Mfjn+EsHt4UqrSM8EXKZCAFU';
                break;

            case '16.3.1':
            case '16.3.1.*':
                $version = '16.3.1';
                $integrity = 'sha384-4srYLE+UG0buQNlOqH1tQBudzBUlBoEZg/fAtDaPfAzqmDXgZh9eFTPzzogPHlJB';
                break;

            case '16.3.0':
            case '16.3.0.*':
                $version = '16.3.0';
                $integrity = 'sha384-np9fvDAELU3iY0BXKBLMkxHt6IFagbxPxnvenyb2XMWv5VcCr+yS7bqr9dmyLftm';
                break;

            case '16.2.*':
                $version = '16.2';
                $integrity = '';
                break;

            case '16.2.0':
            case '16.2.0.*':
                $version = '16.2.0';
                $integrity = 'sha384-j40ChW3xknV2Dsc9+kP3/6SW2UrR7gYSbx9pmyNU1YTacm/PEj/0bxB9vM8jWFqx';
                break;

            case '16.1.*':
                $version = '16.1';
                $integrity = '';
                break;

            case '16.1.1':
            case '16.1.1.*':
                $version = '16.1.1';
                $integrity = 'sha384-Ph7Uujlf9FjqfryfRdN6i1BwQEUozSWvZW9F7SCOXW6j4+sifq21uXq3f3Or2TGt';
                break;

            case '16.1.0':
            case '16.1.0.*':
                $version = '16.1.0';
                $integrity = 'sha384-fxMqpEIVIyyo5HWUwK/TMDN8ln3NtWw6VH3HOlS83gAmCbCX0FLEiv5Mub1h7IXC';
                break;

            case '16.0.*':
            case '16.0.0':
            case '16.0.0.*':
                $version = '16.0.0';
                $integrity = 'sha384-hqL/av/jdhwexbPMcoB6jzLfvBwAgAo5jKJzMpirHW+FBIg769b9IP70lr90RZm0';
                break;

            default:
                $data = null;
                $integrity = null;
                break;
        }

        if (isset($version)) {
            $data = array(
                'src' => 'https://unpkg.com/react@' . $version  . '/umd/react.production.min.js',
                'integrity' => $integrity,
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}