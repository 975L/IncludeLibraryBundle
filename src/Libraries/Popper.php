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
 * Data for Popper - https://popper.js.org
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Popper implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $versions = ['latest' => '@1.14.6', '1.*' => '@1.14.6', '1.14.*' => '@1.14.6', '1.14.6' => '@1.14.6', '1.14.6.*' => '@1.14.6', '1.14.5' => '@1.14.5', '1.14.5.*' => '@1.14.5', '1.14.4' => '@1.14.4', '1.14.4.*' => '@1.14.4', '1.14.3' => '@1.14.3', '1.14.3.*' => '@1.14.3', '1.14.2' => '@1.14.2', '1.14.2.*' => '@1.14.2', '1.14.1' => '@1.14.1', '1.14.1.*' => '@1.14.1', '1.14.0' => '@1.14.0', '1.14.0.*' => '@1.14.0', '1.12.*' => '@1.12.9', '1.12.9' => '@1.12.9', '1.12.9.*' => '@1.12.9'];

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
        $integrities = ['@1.14.6' => 'sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut', '@1.14.5' => 'sha384-a3GqK/TQoh+gPFAiesulJK7xiYNo3loQBWP1a68OkSUM5SqmmQxhzdMUGuNlAw3r', '@1.14.4' => 'sha384-GM0Y80ecpwKxF1D5XCrGanKusGDy9WW0O2sSM84neB4iFhvKp3fwnoIRnPsQcN1R', '@1.14.3' => 'sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49', '@1.14.2' => 'sha384-AXEnX7PDLv+jdnMoormAUbt+QXfB3RKKzS6zZY474XEGvwG9uMHSCAsKGnslQULy', '@1.14.1' => 'sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ', '@1.14.0' => 'sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ', '@1.12.9' => 'sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['src' => 'https://unpkg.com/popper.js' . $useVersion  . '/dist/umd/popper.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous'];
        }

        return $data;
    }
}
