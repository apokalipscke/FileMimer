<?php

namespace Apokalipscke\FileMimer\Exception;

use Exception;

class NotValidMimeTypeException extends Exception
{
    public $message = "The given string is not an valid mime type string.";
}