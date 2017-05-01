<?php

/*
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\console;

/**
 * Goal for Box.
 */
class BoxController extends \hidev\controllers\CommonController
{
    protected $_before = ['install', 'box.json'];

    public $verbose;

    public function getConfiguration()
    {
        return $this->take('box.json');
    }

    public function actionIndex()
    {
        $this->take('vcs')->setIgnore([
            $this->getConfiguration()->get('output') => 'Binaries',
        ]);
        /// TODO fix to use general vcsignore
        $this->runRequest('.gitignore');

        return $this->runBuild();
    }

    public function actionBuild()
    {
        $this->runBuild();
    }

    public function runBuild()
    {
        $args = ['build'];
        if ($this->verbose) {
            $args[] = '--verbose';
        }

        return $this->passthru('box', $args);
    }
}
