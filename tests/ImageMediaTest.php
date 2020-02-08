<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class ImageMediaTest
 * @package Apokalipscke\FileMimer\tests
 */
class ImageMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetImageFileTypeNames()
    {
        $this->assertEquals('SVG-Dateien', FileMimer::get('image/svg+xml'));
        $this->assertEquals('Windows Bitmap-Datei', FileMimer::get('image/bmp'));
    }
}