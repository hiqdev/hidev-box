<?php

/*
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'build' => [
                'after' => [
                    'box',
                ],
            ],
            'box' => [
                'class' => 'hidev\box\controllers\BoxController',
            ],
            'box.json' => [
                'class' => 'hidev\box\controllers\BoxJsonController',
            ],
            'binaries' => [
                'box' => [
                    'package'   => 'box-project/box2',
                    'version'   => '^2.6',
                    'installer' => 'https://box-project.github.io/box2/installer.php',
                ],
            ],
        ],
    ],
];
