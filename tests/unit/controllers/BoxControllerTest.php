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

use hidev\box\controllers\BoxController;

/**
 * Tests for BoxController.
 */
class BoxControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BoxController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new BoxController('box', null);
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertInstanceOf('hidev\base\Controller', $this->object);
    }
}
