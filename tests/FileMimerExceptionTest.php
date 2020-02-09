<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\Exception\MediaTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\MimeTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\InvalidMimeTypeException;
use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class GetMimeTypeTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class FileMimerExceptionTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testInvalidMimeType()
    {
        $this->expectException(InvalidMimeTypeException::class);

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