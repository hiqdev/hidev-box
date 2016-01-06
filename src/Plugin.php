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
            'binaries'  => [
                'box' => [
                    'package'   => 'box-project/box2',
                    'version'   => '^2.6',
                    'installer' => 'https://box-project.github.io/box2/installer.php',
                ],
            ],
        ],
    ];
}
