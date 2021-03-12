<?php


namespace Amida\Alfabank\Response;


class GetOrderDataSet
{
    private ?string $mPhone;
    private ?string $panEnd;
    private ?string $orderSum;
    private ?string $orderTerm;
    private ?string $shopId;
    private ?array $orderNom;
    private ?string $orderAdd;
    private ?string $orderVat;

    private string $messageId;
    private string $statusCode;
    private string $statusText;
    private string $orderId;

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

    public function getMPhone(): string
    {
        return $this->mPhone;
    }

    public function getPanEnd(): string
    {
        return $this->panEnd;
    }

    public function getOrderSum(): string
    {
        return $this->orderSum;
    }

    public function getOrderTerm(): string
    {
        return $this->orderTerm;
    }

    public function getShopId(): ?string
    {
        return $this->shopId;
    }

    public function getOrderNom(): ?array
    {
        return $this->orderNom;
    }

    public function getOrderAdd(): ?string
    {
        return $this->orderAdd;
    }

    public function getOrderVat(): ?string
    {
        return $this->orderVat;
    }

    public function setMPhone(string $mPhone): void
    {
        $this->mPhone = $mPhone;
    }

    public function setPanEnd(string $panEnd): void
    {
        $this->panEnd = $panEnd;
    }

    public function setOrderSum(string $orderSum): void
    {
        $this->orderSum = $orderSum;
    }

    public function setOrderTerm(string $orderTerm): void
    {
        $this->orderTerm = $orderTerm;
    }

    public function setShopId(?string $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function setOrderNom(?array $orderNom): void
    {
        $this->orderNom = $orderNom;
    }

    public function setOrderAdd(?string $orderAdd): void
    {
        $this->orderAdd = $orderAdd;
    }

    public function setOrderVat(?string $orderVat): void
    {
        $this->orderVat = $orderVat;
    }
}