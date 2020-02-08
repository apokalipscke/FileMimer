<?php


namespace Apokalipscke\FileMimer;


use Apokalipscke\FileMimer\Exception\MediaTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\NotValidMimeTypeException;
use Apokalipscke\FileMimer\Media\AbstractMedia;
use Exception;

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
            throw new NotValidMimeTypeException();
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
}