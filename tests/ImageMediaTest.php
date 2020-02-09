<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class ImageMediaTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
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