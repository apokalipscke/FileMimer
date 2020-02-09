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
        $this->assertEquals(
            'Adobe AIR Application',
            FileMimer::get('application/vnd.adobe.air-application-installer-package+zip')
        );

        $this->assertEquals(
            'Microsoft Office – OOXML – Spreadsheet',
            FileMimer::get('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
        );
    }
}