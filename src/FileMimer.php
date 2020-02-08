<?php

namespace Apokalipscke\FileMimer;


use Apokalipscke\FileMimer\Exception\MimeTypeNotFoundException;
use Apokalipscke\FileMimer\Exception\NotValidMimeTypeException;
use Apokalipscke\FileMimer\Media\Application;
use Apokalipscke\FileMimer\Media\Image;
use Exception;

class FileMimer
{
    /**
     * @var array
     */
    private $mimeTypes;

    public function __construct()
    {
        $this->mimeTypes = [];

        $this->mimeTypes = array_merge($this->mimeTypes, Application::types);
        $this->mimeTypes = array_merge($this->mimeTypes, Image::types);
    }

    /**
     * @param string $mime
     * @return string
     * @throws Exception
     */
    public function get(string $mime): string
    {
        if (preg_match('/^[-\w.]+\/[-\w.+]+$/', $mime) == false) {
            throw new NotValidMimeTypeException();
        }

        if (array_key_exists($mime, $this->mimeTypes)) {
            return $this->mimeTypes[$mime];
        } else {
            throw new MimeTypeNotFoundException();
        }
    }

    /**
     * @return static
     */
    public static function getStatic(): self
    {
        return new static();
    }
}