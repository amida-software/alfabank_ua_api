<?php


namespace Amida\Alfabank\Request;


use JsonSerializable;

class UpdateOrderDataSet implements JsonSerializable
{
    private $mPhone;
    private $panEnd;
    private $orderId;
    private $messageId;
    private $orderSum;
    private $orderTerm;
    private $shopId;
    private $orderNom;
    private $orderAdd;
    private $orderVat;

    public function jsonSerialize()
    {
        return [
            'mPhone' => $this->mPhone,
            'panEnd' => $this->panEnd,
            'orderId' => $this->orderId,
            'messageId' => $this->messageId,
            'orderSum' => $this->orderSum,
            'orderTerm' => $this->orderTerm,
            'shopId' => $this->shopId,
            'orderNom' => $this->orderNom,
            'orderAdd' => $this->orderAdd,
            'orderVat' => $this->orderVat,
        ];
    }

    public function getMPhone(): ?string
    {
        return $this->mPhone;
    }

    public function getPanEnd(): ?string
    {
        return $this->panEnd;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    public function getOrderSum(): ?string
    {
        return $this->orderSum;
    }

    public function getOrderTerm(): ?string
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

    public function setMPhone(?string $mPhone): void
    {
        $this->mPhone = $mPhone;
    }

    public function setPanEnd(?string $panEnd): void
    {
        $this->panEnd = $panEnd;
    }

    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function setMessageId(?string $messageId): void
    {
        $this->messageId = $messageId;
    }

    public function setOrderSum(?string $orderSum): void
    {
        $this->orderSum = $orderSum;
    }

    public function setOrderTerm(?string $orderTerm): void
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