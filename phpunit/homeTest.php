<?php
/**
 * Created by PhpStorm.
 * User: timodz
 * Date: 8/30/17
 * Time: 9:46 PM
 */

use PHPUnit\Framework\TestCase;

class homeTest extends TestCase
{
    // test loading view
    public function testLoadview()
    {
        {
            $this->assertFileExists(__DIR__ . '/../views/main.html');
        }
    }
}
