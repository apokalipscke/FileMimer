<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\Exception\MediaTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\MimeTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\NotValidMimeTypeException;
use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class GetMimeTypeTest
 * @package Apokalipscke\FileMimer\tests
 */
class GetMimeTypeTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetMimeType()
    {
        $this->assertEquals('AutoCAD-Dateien (nach NCSA)', FileMimer::get('application/acad'));
        $this->assertEquals('Excel (OpenOffice Calc)', FileMimer::get('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'));
        $this->assertEquals('Windows Bitmap', FileMimer::get('image/bmp'));
    }

    /**
     * @throws Exception
     */
    public function testInvalidMimeTypeString()
    {
        $this->expectException(NotValidMimeTypeException::class);

        FileMimer::get('applicationacad');
    }

    /**
     * @throws Exception
     */
    public function testMimeTypeNotFound()
    {
        $this->expectException(MimeTypeNotFoundException::class);

        FileMimer::get('application/endefined');
    }

    /**
     * @throws Exception
     */
    public function testMediaTypeNotFound()
    {
        $this->expectException(MediaTypeNotFoundException::class);

        FileMimer::get('undefined/undefined');
    }
}