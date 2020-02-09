<?php


namespace Apokalipscke\FileMimer\Exception;


use Exception;

/**
 * Class MediaTypeNotFoundException
 * @package Apokalipscke\FileMimer\Exception
 * @author Marc Lipscke <marlip1901@gmail.com>
 */
class MediaTypeNotFoundException extends Exception
{
    protected $message = "Media type not found.";
}