<?php
/**
 * Box plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-box
 * @package   hidev-box
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\box\tests\unit\console;

use hidev\box\console\BoxController;

/**
 * Tests for BoxController.
 */
class BoxControllerTest extends \PHPUnit\Framework\TestCase
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
        $this->assertInstanceOf(\hidev\base\Controller::class, $this->object);
    }
}
