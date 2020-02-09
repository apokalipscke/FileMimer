<?php


namespace Apokalipscke\FileMimer\Exception;


use Exception;

/**
 * Class MimeTypeNotFoundException
 * @package Apokalipscke\FileMimer\Exception
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class MimeTypeNotFoundException extends Exception
{
    public $message = "Mime type not found.";
}