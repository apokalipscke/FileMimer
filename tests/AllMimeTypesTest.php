<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\Media\En\Application;
use Apokalipscke\FileMimer\Media\En\Audio;
use Apokalipscke\FileMimer\Media\En\Image;
use Apokalipscke\FileMimer\Media\En\Text;
use Apokalipscke\FileMimer\Media\En\Video;
use PHPUnit\Framework\TestCase;

/**
 * Class AllMimeTypesTest
 * @package Apokalipscke\FileMimer\tests
 */
class AllMimeTypesTest extends TestCase
{
    public function testAllApplicationMimeTypes()
    {
        $applicationMimeTypes = Application::getAllMediaTypes();

        $this->assertEquals(531, count($applicationMimeTypes));
    }

    public function testAllAudioMimeTypes()
    {
        $audioMimeTypes = Audio::getAllMediaTypes();

        $this->assertEquals(26, count($audioMimeTypes));
    }

    public function testAllImageMimeTypes()
    {
        $imagesMimeTypes = Image::getAllMediaTypes();

        $this->assertEquals(41, count($imagesMimeTypes));
    }

    public function testAllTextMimeTypes()
    {
        $tectMimeTypes = Text::getAllMediaTypes();

        $this->assertEquals(38, count($tectMimeTypes));
    }

    public function testAllVideoMimeTypes()
    {
        $videoMimetypes = Video::getAllMediaTypes();

        $this->assertEquals(34, count($videoMimetypes));
    }
}