<?php
/*
 * (c) 2019: 975L <contact@975l.com>
 * (c) 2019: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace c975L\IncludeLibraryBundle\Libraries;

/**
 * Data for Friconix - https://friconix.com
 * @author Laurent Marquet <laurent.marquet@laposte.net>
 * @copyright 2019 975L <contact@975l.com>
 */
class Friconix implements JavascriptInterface
{
    /**
     * {@inheritdoc}
     */
    public function getJavascript(string $useVersion)
    {
        switch ($version) {
            case 'latest':
                $data = array(
                    'src' => 'https://friconix.com/cdn/friconix.js',
                    'defer' => true,
                    'crossorigin' => 'anonymous',
                    );
                break;

            default:
                $data = null;
                break;
        }

        return $data;
    }
}