<?php

namespace PHPSoundCloud;

/**
 * Soundcloud package version
 *
 * @category  PHPSoundcloud
 * @package   Api
 * @author    Anton Lindqvist <anton@qvister.se>
 * @author    David Rodger <david@audioio.com>
 * @copyright 2010 Anton Lindqvist <anton@qvister.se>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://github.com/mptre/php-soundcloud
 */
class Version
{

    const MAJOR = 2;
    const MINOR = 3;
    const PATCH = 2;

    /**
     * Magic to string method
     *
     * @return string
     *
     * @access public
     */
    function __toString()
    {
        return implode('.', array(self::MAJOR, self::MINOR, self::PATCH));
    }

}
