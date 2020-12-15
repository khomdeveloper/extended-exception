<?php


namespace valera261104\ExtendedException;


use Throwable;

/**
 * Class ExtendedException
 * @package valera261104\ExtendedException
 */
abstract class ExtendedException extends \Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct(
            json_encode($this->getError($message ?: [])),
            is_int($code) ? $code : 0,
            $previous
        );
    }

    abstract public function getError(array $data = []): array;
}