<?php

namespace Test\App\Http;

use App\Http\Request;
use App\Http\RequestFactory;
use PHPUnit\Framework\TestCase;

class RequestFactoryTest extends TestCase
{
    public function testEmpty(): void
    {
        $request = RequestFactory::fromGlobals(
            $queryParams = ['name' => 'John'],
            $parsedBody = ['age' => 42]
        );

        self::assertInstanceOf(Request::class, $request);
        self::assertEquals($queryParams, $request->getQueryParams());
        self::assertEquals($parsedBody, $request->getParsedBody());
    }
}