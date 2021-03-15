<?php


namespace Amida\Alfabank\Response;


use Psr\Http\Message\ResponseInterface;

class GetGuaranteeDataSet
{
    private ?Guarantee $guarantee;
    private ?string $base64Pdf;

    private string $messageId;
    private string $statusCode;
    private string $statusText;
    private string $orderId;

    public function __construct(ResponseInterface $httpResponse)
    {
        $this->setDataFromObject(json_decode($httpResponse->getBody()));
    }

    public function setDataFromObject(object $object)
    {
        $this->setMessageId($object->messageId);
        $this->setOrderId($object->orderId);
        $this->setStatusCode($object->statusCode);
        $this->setStatusText($object->statusText);

        if ($object->guarantee) {
            $guarantee = new Guarantee();
            $guarantee->setAccrualSum($object->guarantee->accrualSum);
            $guarantee->setOrderSum($object->guarantee->orderSum);
            $guarantee->setOrderVat($object->guarantee->orderVat);
            $guarantee->setSumComis($object->guarantee->sumComis);
            $guarantee->setTransactionDate($object->guarantee->transactionDate);

            $this->setGuarantee($guarantee);
        }
        $this->setBase64Pdf($object->base64Pdf);
    }

    public function getGuarantee(): ?Guarantee
    {
        return $this->guarantee;
    }

    public function setGuarantee(?Guarantee $guarantee): void
    {
        $this->guarantee = $guarantee;
    }

    public function getBase64Pdf(): ?string
    {
        return $this->base64Pdf;
    }

    public function setBase64Pdf(?string $base64Pdf): void
    {
        $this->base64Pdf = $base64Pdf;
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