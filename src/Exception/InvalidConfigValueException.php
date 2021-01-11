<?php


namespace LiveStyled\Exception;


use Throwable;

class InvalidConfigValueException extends \Exception
{
    public function __construct($params = [], $code = 422, Throwable $previous = null)
    {
        $message = "The value: {$params[0]} is not valid for field {$params[1]}";

        parent::__construct($message, $code, $previous);
    }
}
