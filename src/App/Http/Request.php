<?php

namespace App\Http;

/**
 * Class Request
 * @package App\Http
 */
class Request
{
    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $_GET;
    }

    /**
     * @return null | array
     */
    public function getParsedBody()
    {
        return $_POST ?: null;
    }
}
