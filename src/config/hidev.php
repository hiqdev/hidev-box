<?php
/**
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' => [
        'build' => [
            'after' => [
                'box',
            ],
        ],
        'box' => [
            'class' => \hidev\box\console\BoxController::class,
        ],
        'box.json' => [
            'class' => \hidev\box\console\BoxJsonController::class,
        ],
    ],
    'components' => [
        'box.json' => [
            'class' => \hidev\box\components\BoxJson::class,
        ],
        'binaries' => [
            'box' => [
                'package'   => 'box-project/box2',
                'version'   => '^2.6',
                'installer' => 'https://box-project.github.io/box2/installer.php',
            ],
        ],
    ],
];
