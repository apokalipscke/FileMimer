<?php


use Apokalipscke\FileMimer\FileMimer;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplicationMediaTest
 * @package Apokalipscke\FileMimer\tests
 * @author Marc Lipscke <marlip1901@gmail.com>
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