<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class TextMediaTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class TextMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetImageFileTypeNames()
    {
        $this->assertEquals('JavaScript Source File', FileMimer::get('text/javascript'));
        $this->assertEquals('Comma-Seperated Values', FileMimer::get('text/csv'));
    }
}