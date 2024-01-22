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
 * Data for Select2 - https://select2.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Select2 implements CssInterface, JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = ['latest' => '4.0.6-rc.0', '4.*' => '4.0.6-rc.0', '4.0.*' => '4.0.6-rc.0', '4.0.6' => '4.0.6-rc.0', '4.0.6.*' => '4.0.6-rc.0', '4.0.3' => '4.0.3', '4.0.3.*' => '4.0.3'];

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
        $integrities = ['4.0.6-rc.0' => 'sha384-RdQbeSCGSeSdSlTMGnUr2oDJZzOuGjJAkQy1MbKMu8fZT5G0qlBajY0n0sY/hKMK', '4.0.3' => 'sha384-HIipfSYbpCkh5/1V87AWAeR5SUrNiewznrUrtNz1ux4uneLhsAKzv/0FnMbj3m6g'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['href' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/' . $useVersion . '/css/select2.min.css', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous'];
        }

        return $data;
    }

    /*
     * Refer to README.md for how-to add versions
     */
    public function getJavascript(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = ['4.0.6-rc.0' => 'sha384-uQwKPrmNkEOvI7rrNdCSs6oS1F3GvnZkmPtkntOSIiPQN4CCbFSxv+Bj6qe0mWDb', '4.0.3' => 'sha384-222hzbb8Z8ZKe6pzP18nTSltQM3PdcAwxWKzGOKOIF+Y3bROr5n9zdQ8yTRHgQkQ'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['src' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/' . $useVersion  . '/js/select2.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous', 'defer' => false];
        }

        return $data;
    }
}
