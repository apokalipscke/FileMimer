<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use PHPUnit\Framework\TestCase;

class GetMimeTypeStaticTest extends TestCase
{
    public function testGetMimeType()
    {
        $this->assertEquals('AutoCAD', FileMimer::getStatic()->get('application/acad'));
        $this->assertEquals('Windows Bitmap', FileMimer::getStatic()->get('image/bmp'));
    }
}