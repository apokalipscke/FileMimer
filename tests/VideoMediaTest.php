<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class VideoMediaTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class VideoMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetVideoFileTypeNames()
    {
        $this->assertEquals('MPEG Video', FileMimer::get('video/mpeg'));
        $this->assertEquals('Ogg Video', FileMimer::get('video/ogg'));
    }
}