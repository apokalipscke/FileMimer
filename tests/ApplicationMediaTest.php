<?php


namespace Apokalipscke\FileMimer\tests;


use Apokalipscke\FileMimer\FileMimer;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationMediaTest
 * @package Apokalipscke\FileMimer\tests
 */
class ApplicationMediaTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testGetApplicationFileTypeNames()
    {
        $this->assertEquals('AutoCAD-Dateien (nach NCSA)', FileMimer::get('application/acad'));
        $this->assertEquals('Excel (OpenOffice Calc)', FileMimer::get('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'));
    }
}