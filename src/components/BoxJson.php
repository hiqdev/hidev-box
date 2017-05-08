<?php
/**
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\components;

/**
 * `box.json` config file.
 */
class BoxJson extends \hidev\components\File
{
    protected $_file = 'box.json';

    public $chmod = '0755';
}
