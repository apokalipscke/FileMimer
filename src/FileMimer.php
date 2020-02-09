<?php


namespace Apokalipscke\FileMimer;


use Apokalipscke\FileMimer\Exception\InvalidMimeTypeException;
use Apokalipscke\FileMimer\Exception\MediaTypeNotFoundException;
use Apokalipscke\FileMimer\Media\AbstractMedia;
use Exception;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class FileMimer
 * @package Apokalipscke\FileMimer
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class FileMimer
{
    /**
     * @param string $mime
     * @param string $language
     * @return string
     * @throws Exception
     */
    public static function get(string $mime, string $language = 'en'): string
    {
        if (preg_match('/^[-\w.]+\/[-\w.+]+$/', $mime) == false) {
            throw new InvalidMimeTypeException();
        }

        $mimeType = explode('/', $mime);
        $media = $mimeType[0];
        $subtype = $mimeType[1];

        /** @var AbstractMedia $mediaClassName */
        $mediaClassName = 'Apokalipscke\\FileMimer\\Media\\' . ucfirst($language) . '\\' . ucfirst($media);

        if (!class_exists($mediaClassName)) {
            throw new MediaTypeNotFoundException();
        }

        return $mediaClassName::getName($subtype);
    }

    /**
     * @param string $filePath
     * @param string $language
     * @return string
     * @throws Exception
     */
    public static function getFromFile(string $filePath, string $language = 'en'): string
    {
        $file = new File($filePath);

        return self::get($file->getMimeType(), $language);
    }
}