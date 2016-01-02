<?php

/*
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\goals;

/**
 * Goal for box.json config file.
 */
class BoxJsonGoal extends \hidev\goals\FileGoal
{
    protected $_file = 'box.json';
}
