<?php


namespace Amida\Alfabank\Response;


use Psr\Http\Message\ResponseInterface;

class ResponseDataSet
{
    private $response;

    private $messageId;
    private $statusCode;
    private $statusText;
    private $orderId;

    public function __construct(ResponseInterface $httpResponse)
    {
        $this->response = $httpResponse;

        $this->setDataFromObject(json_decode($httpResponse->getBody()));
    }

    public function setDataFromObject(object $object)
    {
        $this->setMessageId($object->messageId);
        $this->setOrderId($object->orderId);
        $this->setStatusCode($object->statusCode);
        $this->setStatusText($object->statusText);
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    public function getStatusText(): string
    {
        return $this->statusText;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setMessageId(string $messageId): void
    {
        $this->messageId = $messageId;
    }

    public function setStatusCode(string $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function setStatusText(string $statusText): void
    {
        $this->statusText = $statusText;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }
}