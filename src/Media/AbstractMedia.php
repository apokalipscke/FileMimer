<?php


namespace Apokalipscke\FileMimer\Media;


use Apokalipscke\FileMimer\Exception\MimeTypeNotFoundException;

/**
 * Class AbstractMedia
 * @package Apokalipscke\FileMimer\Media
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
abstract class AbstractMedia
{
    /**
     * get mime types for this media domain
     *
     * @return array
     */
    public static function getAllMediaTypes(): array
    {
        return static::types;
    }

    /**
     * get the human file type name for an subtype
     *
     * @param string $subtype
     * @return string
     * @throws MimeTypeNotFoundException
     */
    public static function getName(string $subtype): string
    {
        if (array_key_exists($subtype, static::types)) {
            return static::types[$subtype];
        } else {
            throw new MimeTypeNotFoundException();
        }
    }
}