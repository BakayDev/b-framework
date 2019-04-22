<?php

namespace Tests\App\Http;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $_POST = [];
        $_GET = [];
    }

    public function testEmpty(): void
    {
        $_GET = [];
        $_GET = [];

        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams(): void
    {
        $_GET = $data = [
            'name' => 'D',
            'age' => '24'
        ];
        $request = new Request();

        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testParsedBody(): void
    {
        $_POST = $data = ['title' => 'Title'];
        $request = new Request();
        self::assertEquals($data, $request->getParsedBody());
        self::assertEquals([], $request->getQueryParams());
    }
}