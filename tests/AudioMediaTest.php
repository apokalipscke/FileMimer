<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class AudioMediaTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class AudioMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetAudioFileTypeNames()
    {
        $this->assertEquals('MPEG Audio', FileMimer::get('audio/mpeg'));
        $this->assertEquals('Ogg Audio', FileMimer::get('audio/ogg'));
    }
}