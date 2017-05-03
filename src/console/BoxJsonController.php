<?php
/**
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\console;

/**
 * `box.json` config file.
 */
class BoxJsonController extends \hidev\base\Controller
{
    public function actionIndex()
    {
        $this->take('box.json')->save();
    }
}
