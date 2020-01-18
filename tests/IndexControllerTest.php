<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Controllers\IndexController;

class IndexControllerTest extends TestCase
{
    public function testIndex()
    {
        $indexController = new IndexController();

        // use assertEquals to ensure the greeting is what you
        $expected = "Index initialized";
        $actual = $indexController->index();
        $this->assertEquals($expected, $actual);
    }
}
