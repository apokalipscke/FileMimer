<?php


namespace Apokalipscke\FileMimer\Media;

/**
 * Class Application
 * @package Apokalipscke\FileMimer\Media
 */
class Application extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'acad' => 'AutoCAD',
        'applefile' => "AppleFile",
    ];
}