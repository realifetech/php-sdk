<?php


namespace LiveStyled\Exception;


use Throwable;

class UnsupportedConfigParameterException extends \Exception
{
    public function __construct($message = "", $code = 422, Throwable $previous = null)
    {
        $message = "Config key {$message} is not valid.";

        parent::__construct($message, $code, $previous);
    }
}
