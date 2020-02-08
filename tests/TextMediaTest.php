<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class TextMediaTest
 * @package Apokalipscke\FileMimer\tests
 */
class TextMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetImageFileTypeNames()
    {
        $this->assertEquals('JavaScript-Dateien', FileMimer::get('text/javascript'));
        $this->assertEquals('kommaseparierte Datendateien', FileMimer::get('text/comma-separated-values'));
    }
}