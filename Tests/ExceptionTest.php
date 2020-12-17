<?php

namespace valera261104\ExtendedException\Tests;

use valera261104\ExtendedException\Exceptions\FileNotFound;

class ExceptionTest extends \PHPUnit\Framework\TestCase
{

    //./vendor/bin/phpunit --testdox tests

    public function testCallException()
    {

        $ex = new FileNotFound();

        $message = json_decode($ex->getMessage(), true);

        $this->assertEquals('File not found', current($message)['en']);

    }

}