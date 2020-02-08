<?php


namespace Apokalipscke\FileMimer\Exception;


use Exception;

class MediaTypeNotFoundException extends Exception
{
    protected $message = "Media type not found.";
}