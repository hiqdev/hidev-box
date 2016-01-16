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
    protected $_before = ['install', 'box.json'];

    public $configFile = 'box.json';

    public $verbose;

    public function getConfiguration()
    {
        return $this->takeGoal($this->configFile);
    }

    public function actionMake()
    {
        $this->takeVcs()->setIgnore([$this->getConfiguration()->get('output') => 'PHARs']);
        /// TODO fix to use general vcsignore
        $this->runRequest('.gitignore');

        return $this->actionBuild();
    }

    public function actionBuild()
    {
        $args = ['build'];
        if ($this->verbose) {
            $args[] = '--verbose';
        }

        return $this->passthru('box', $args);
    }
}
