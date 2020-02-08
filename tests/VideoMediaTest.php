<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class VideoMediaTest
 * @package Apokalipscke\FileMimer\tests
 */
class VideoMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetVideoFileTypeNames()
    {
        $this->assertEquals('MPEG-Videodateien', FileMimer::get('video/mpeg'));
        $this->assertEquals('OGG-Dateien', FileMimer::get('video/ogg'));
    }
}