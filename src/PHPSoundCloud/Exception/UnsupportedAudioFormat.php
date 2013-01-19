<?php

namespace PHPSoundCloud\Exception;

/**
 * Soundcloud unsupported audio format exception.
 *
 * @category  PHPSoundcloud
 * @package   Api
 * @author    Anton Lindqvist <anton@qvister.se>
 * @author    David Rodger <david@audioio.com>
 * @copyright 2010 Anton Lindqvist <anton@qvister.se>
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 * @link http://github.com/mptre/php-soundcloud
 */
class UnsupportedAudioFormat extends \Exception {

    /**
     * Default message.
     *
     * @access protected
     *
     * @var string
     */
    protected $message = 'The given audio format is unsupported.';

}
