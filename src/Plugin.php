<?php

/*
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'box'       => 'hidev\box\goals\BoxGoal',
            'box.json'  => 'hidev\box\goals\BoxJsonGoal',
            'install'          => [
                'require' => [
                    'box-project/box2'   => '^2.6',
                ],
                'bin' => [
                    'box'               => 'box-project/box2:^2.6',
                ],
            ],
        ],
    ];
}
