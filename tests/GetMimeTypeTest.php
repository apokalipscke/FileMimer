<?php

namespace Apokalipscke\FileMimer\tests;

use Apokalipscke\FileMimer\Exception\MimeTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\NotValidMimeTypeException;
use Apokalipscke\FileMimer\FileMimer;
use PHPUnit\Framework\TestCase;

class GetMimeTypeTest extends TestCase
{
    /**
     * @var FileMimer
     */
    private $mimer;

    public function setUp(): void
    {
        $this->mimer = new FileMimer();
    }

    public function testGetMimeType()
    {
        $this->assertEquals('AutoCAD', $this->mimer->get('application/acad'));
        $this->assertEquals('Windows Bitmap', $this->mimer->get('image/bmp'));
    }

    public function testInvalidMimeTypeString()
    {
        $this->expectException(NotValidMimeTypeException::class);

        $this->mimer->get('applicationacad');
    }

    public function testMimeTypeNotFound()
    {
        $this->expectException(MimeTypeNotFoundException::class);

        $this->mimer->get('application/endefined');
    }
}