<?php


namespace Amida\Alfabank\Response;


use Psr\Http\Message\ResponseInterface;

class BasicResponseDataSet
{
    private $response;

    private $statusCode;
    private $statusText;

    public function __construct(ResponseInterface $httpResponse)
    {
        $this->response = $httpResponse;

        $this->setDataFromObject(json_decode($httpResponse->getBody()));
    }

    public function setDataFromObject(object $object)
    {
        $this->setStatusCode($object->statusCode);
        $this->setStatusText($object->statusText);
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }

    public function setStatusCode(string $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function setStatusText(string $statusText): void
    {
        $this->statusText = $statusText;
    }
}