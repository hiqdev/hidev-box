<?php

/*
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\tests\unit\controllers;

use hidev\box\controllers\BoxJsonController;

/**
 * Tests for BoxJsonController.
 */
class BoxJsonControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BoxJsonController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new BoxJsonController('.box.json', null);
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }
}
