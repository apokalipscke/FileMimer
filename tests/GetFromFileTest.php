<?php


use Apokalipscke\FileMimer\FileMimer;
use PHPUnit\Framework\TestCase;

/**
 * Class GetFromFileTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class GetFromFileTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testImageFromFile()
    {
        $this->assertEquals(
            'Scalable Vector Graphics (SVG)',
            FileMimer::getFromFile(__DIR__ . "/Fixtures/LRbird0001.svg")
        );
    }
}