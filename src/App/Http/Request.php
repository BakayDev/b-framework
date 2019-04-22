<?php

namespace App\Http;

/**
 * Class Request
 * @package App\Http
 */
class Request
{
    private $queryParams;
    private $parsedBody;

    public function __construct(array $queryParams = [], $parsedBody = null)
    {
        $this->queryParams = $queryParams;
        $this->parsedBody = $parsedBody;
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    /**
     * @return null | array
     */
    public function getParsedBody()
    {
        return $this->parsedBody;
    }
}
