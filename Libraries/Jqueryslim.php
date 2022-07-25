<?php
/*
 * (c) 2018: 975L <contact@975l.com>
 * (c) 2018: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

use c975L\IncludeLibraryBundle\Libraries\Jquery;

/**
 * Data for jQuery Slim - https://code.jquery.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2018 975L <contact@975l.com>
 */
class Jqueryslim implements JavascriptInterface
{
    /**
     * Use this method to get version to use
     * @return string|null
     */
    public function getVersion(string $version)
    {
        $jQuery = new Jquery();

        return $jQuery->getVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $version)
    {
        $useVersion = $this->getVersion($version);

        //Data for specific version
        $integrities = ['3.4.1' => 'sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=', '3.4.0' => 'sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=', '3.3.1' => 'sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=', '3.3.0' => 'sha256-AMg3I7ya76OLPD9M+Mk7kqrA29HUn/FuGBfT/9Uf9ls=', '3.2.1' => 'sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=', '3.2.0' => 'sha256-qLAv0kBAihcHZLI3fv3WITKeRsUX27hd6upBBa0MSow=', '3.1.1' => 'sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=', '3.1.0' => 'sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=', '3.0.0' => 'sha256-Rf4BadfyCtsvHmO89BUZcbYvNNvZvOT08ALfEzvCsD0='];

        //Defines data to use
        $data = null;
        if (false !== $useVersion && isset($integrities[$useVersion])) {
            $data = ['src' => 'https://code.jquery.com/jquery-' . $useVersion  . '.slim.min.js', 'integrity' => $integrities[$useVersion], 'crossorigin' => 'anonymous', 'defer' => false];
        }

        return $data;
    }
}
