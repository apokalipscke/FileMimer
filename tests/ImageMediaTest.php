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
        $this->assertEquals('Scalable Vector Graphics (SVG)', FileMimer::get('image/svg+xml'));
        $this->assertEquals('Bitmap Image File', FileMimer::get('image/bmp'));
    }
}