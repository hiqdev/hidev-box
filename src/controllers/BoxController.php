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

/**
 * Goal for Box.
 */
class BoxController extends \hidev\controllers\CommonController
{
    public $configFile = 'box.json';

    public function getConfiguration()
    {
        return $this->config->get($this->configFile);
    }

    public function actionMake()
    {
        return $this->actionBuild();
    }

    public function actionBuild()
    {
        return $this->passthru('box', ['build']);
    }
}
