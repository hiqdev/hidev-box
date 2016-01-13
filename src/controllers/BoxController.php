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

    public function init()
    {
        $this->setDeps($this->configFile);
    }

    public function options($action)
    {
        return array_merge(parent::options($action), ['force', 'coverageText', 'coverageClover']);
    }

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
        $args = ['build'];

        return $this->passthru('box', $args);
    }
}
