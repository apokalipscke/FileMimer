<?php


namespace Apokalipscke\FileMimer\Media;

/**
 * Class Image
 * @package Apokalipscke\FileMimer\Media
 */
class Image extends AbstractMedia
{
    /**
     * human file type name by subtype
     */
    protected const types = [
        'bmp' => 'Windows Bitmap',
    ];
}