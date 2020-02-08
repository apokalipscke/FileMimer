<?php

namespace Apokalipscke\FileMimer\Exception;

use Exception;

class InvalidMimeTypeException extends Exception
{
    public $message = "The given string is not an valid mime type string.";
}