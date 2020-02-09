<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class GetFromFileTest
 * @package Apokalipscke\FileMimer\tests
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