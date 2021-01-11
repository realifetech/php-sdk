<?php


namespace LiveStyled\Exception;


use Throwable;

class ConfigParameterRequiredException extends \Exception
{
    public function __construct($message = "", $code = 422, Throwable $previous = null)
    {
        $message = "Config key {$message} is required.";

        parent::__construct($message, $code, $previous);
    }
}
