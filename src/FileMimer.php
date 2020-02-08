<?php


namespace Apokalipscke\FileMimer;


use Apokalipscke\FileMimer\Exception\MediaTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\InvalidMimeTypeException;
use Apokalipscke\FileMimer\Media\AbstractMedia;
use Exception;
use Symfony\Component\HttpFoundation\File\File;

class FileMimer
{
    /**
     * @param string $mime
     * @return string
     * @throws Exception
     */
    public static function get(string $mime): string
    {
        if (preg_match('/^[-\w.]+\/[-\w.+]+$/', $mime) == false) {
            throw new InvalidMimeTypeException();
        }

        $mimeType = explode('/', $mime);
        $media = $mimeType[0];
        $subtype = $mimeType[1];

        /** @var AbstractMedia $mediaClassName */
        $mediaClassName = 'Apokalipscke\\FileMimer\\Media\\' . ucfirst($media);

        if (!class_exists($mediaClassName)) {
            throw new MediaTypeNotFoundException();
        }

        return $mediaClassName::getName($subtype);
    }

    /**
     * @param File $file
     * @return string
     * @throws Exception
     */
    public static function getFromFile(File $file): string
    {
        return self::get($file->getMimeType());
    }
}