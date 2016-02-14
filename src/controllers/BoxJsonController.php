<?php

/*
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\controllers;

use hidev\helpers\Helper;

/**
 * Goal for box.json config file.
 */
class BoxJsonController extends \hidev\controllers\FileController
{
    protected $_file = 'box.json';

    public function actionSave()
    {
        $this->_items = Helper::uniqueConfig($this->_items);
        $this->getFile()->save($this->getItems());
        return 0;
    }
}
