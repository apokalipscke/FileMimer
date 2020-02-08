<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class AudioMediaTest
 * @package Apokalipscke\FileMimer\tests
 */
class AudioMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetAudioFileTypeNames()
    {
        $this->assertEquals('MP3-Dateien', FileMimer::get('audio/mpeg'));
        $this->assertEquals('OGG-Dateien', FileMimer::get('audio/ogg'));
    }
}