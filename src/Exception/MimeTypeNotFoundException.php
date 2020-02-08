<?php


namespace Apokalipscke\FileMimer\Exception;


use Exception;

class MimeTypeNotFoundException extends Exception
{
    public $message = "Mime type not found.";
}