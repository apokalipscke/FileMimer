<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\File;

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
        $svgFile = new File(__DIR__ . "/Fixtures/LRbird0001.svg");

        $this->assertEquals('SVG-Dateien', FileMimer::getFromFile($svgFile));
    }
}