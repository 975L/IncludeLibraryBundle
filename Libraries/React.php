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
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = array(
            'latest' => '16.6.3',

            '16.*' => '16.6.3',
            '16.6.*' => '16.6.3',
            '16.6.3' => '16.6.3',
            '16.6.3.*' => '16.6.3',

            '16.6.1' => '16.6.1',
            '16.6.1.*' => '16.6.1',

            '16.6.0' => '16.6.0',
            '16.6.0.*' => '16.6.0',

            '16.5.*' => '16.5.2',
            '16.5.2' => '16.5.2',
            '16.5.2.*' => '16.5.2',

            '16.5.1' => '16.5.1',
            '16.5.1.*' => '16.5.1',

            '16.5.0' => '16.5.0',
            '16.5.0.*' => '16.5.0',

            '16.4.*' => '16.4.2',
            '16.4.2' => '16.4.2',
            '16.4.2.*' => '16.4.2',

            '16.4.1' => '16.4.1',
            '16.4.1.*' => '16.4.1',

            '16.4.0' => '16.4.0',
            '16.4.0.*' => '16.4.0',

            '16.3.*' => '16.3.2',
            '16.3.2' => '16.3.2',
            '16.3.2.*' => '16.3.2',

            '16.3.1' => '16.3.1',
            '16.3.1.*' => '16.3.1',

            '16.3.0' => '16.3.0',
            '16.3.0.*' => '16.3.0',

            '16.2.*' => '16.2.0',
            '16.2.0' => '16.2.0',
            '16.2.0.*' => '16.2.0',

            '16.1.*' => '16.1.1',
            '16.1.1' => '16.1.1',
            '16.1.1.*' => '16.1.1',

            '16.1.0' => '16.1.0',
            '16.1.0.*' => '16.1.0',

            '16.0.*' => '16.0.0',
            '16.0.0' => '16.0.0',
            '16.0.0.*' => '16.0.0',
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
            '16.6.3' => 'sha384-iux0izj7Hd5A91m1k45xtV2Lt1RTPNZYUPLTElh/5icjzSS1YztZTlseuwlkcQqO',
            '16.6.1' => 'sha384-DDVCZmwBefEya/gllSz8If5sgMKVowazItDhJzj18fAt2TaA6G2N6XPruKSt5uNj',
            '16.6.0' => 'sha384-I3sR01Rko3zsR3HHXChatyBHIyrMRG5xVcHZrrrJEhC32Ww39Jv7u7emyipbOdG3',
            '16.5.2' => 'sha384-Yi0gacTNJqXkg0cW4aIcDYSxeByVmKiohsbG47CzKt4PzRHAvQZ5isIrry9EI5jq',
            '16.5.1' => 'sha384-TxRtixpJUGd5aw9dGzHnvHChjvf+UiM8nFPmYT6LEWOM9gbijhTKGOPo8qepQFpp',
            '16.5.0' => 'sha384-/d1+ajIp3eNRfbnoMBOkqBWZ0cV9I0393DxIjXsXi/fcOkg6JMNh03ir013b7WDo',
            '16.4.2' => 'sha384-h6QXRvNMHDNwdjUIA5y9qzljw7h6SV1AJRR4ccA3sVdKNJQ5fIaq1ozaxFi4oYJL',
            '16.4.1' => 'sha384-nknFr2hIJEELeBc74Ig3GPXUXITBKkPCdvhYiaI9N/z4w29fBDju2T1Fa8UYtYXY',
            '16.4.0' => 'sha384-v2idw2oCR9LMlpJYSzv6tmiCFVSFBuZYoQpbrE/bTouGWXr4xlFFuJtu8YCgwsSM',
            '16.3.2' => 'sha384-ssmDfleGSKwIS4GlKJM3gqgSQtp6pzFAc7y8f0r2Mfjn+EsHt4UqrSM8EXKZCAFU',
            '16.3.1' => 'sha384-4srYLE+UG0buQNlOqH1tQBudzBUlBoEZg/fAtDaPfAzqmDXgZh9eFTPzzogPHlJB',
            '16.3.0' => 'sha384-np9fvDAELU3iY0BXKBLMkxHt6IFagbxPxnvenyb2XMWv5VcCr+yS7bqr9dmyLftm',
            '16.2.0' => 'sha384-j40ChW3xknV2Dsc9+kP3/6SW2UrR7gYSbx9pmyNU1YTacm/PEj/0bxB9vM8jWFqx',
            '16.1.1' => 'sha384-Ph7Uujlf9FjqfryfRdN6i1BwQEUozSWvZW9F7SCOXW6j4+sifq21uXq3f3Or2TGt',
            '16.1.0' => 'sha384-fxMqpEIVIyyo5HWUwK/TMDN8ln3NtWw6VH3HOlS83gAmCbCX0FLEiv5Mub1h7IXC',
            '16.0.0' => 'sha384-hqL/av/jdhwexbPMcoB6jzLfvBwAgAo5jKJzMpirHW+FBIg769b9IP70lr90RZm0',
        );

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = array(
                'src' => 'https://unpkg.com/react@' . $useVersion  . '/umd/react.production.min.js',
                'integrity' => $integrities[$useVersion],
                'crossorigin' => 'anonymous',
            );
        }

        return $data;
    }
}
