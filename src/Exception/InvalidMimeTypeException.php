<?php

namespace Apokalipscke\FileMimer\Exception;

use Exception;

/**
 * Class InvalidMimeTypeException
 * @package Apokalipscke\FileMimer\Exception
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class InvalidMimeTypeException extends Exception
{
    public $message = "The given string is not an valid mime type string.";
}