<?php


namespace Amida\Alfabank\Request;


use JsonSerializable;

class CreateOrderDataSet implements JsonSerializable
{
    private string $mPhone;
    private string $panEnd;
    private string $orderId;
    private string $orderSum;
    private string $orderTerm;
    private string $callBackURL;
    private ?string $shopId;
    private ?string $orderNom;
    private ?string $orderAdd;
    private ?string $orderVat;

    public function jsonSerialize()
    {
        return [
            'mPhone' => $this->mPhone,
            'panEnd' => $this->panEnd,
            'orderId' => $this->orderId,
            'orderSum' => $this->orderSum,
            'orderTerm' => $this->orderTerm,
            'callBackURL' => $this->callBackURL,
            'shopId' => $this->shopId,
            'orderNom' => $this->orderNom,
            'orderAdd' => $this->orderAdd,
            'orderVat' => $this->orderVat,
        ];
    }

    public function getMPhone(): string
    {
        return $this->mPhone;
    }

    public function getPanEnd(): string
    {
        return $this->panEnd;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getOrderSum(): string
    {
        return $this->orderSum;
    }

    public function getOrderTerm(): string
    {
        return $this->orderTerm;
    }

    public function getCallBackURL(): string
    {
        return $this->callBackURL;
    }

    public function getShopId(): ?string
    {
        return $this->shopId;
    }

    public function getOrderNom(): ?string
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

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function setOrderSum(string $orderSum): void
    {
        $this->orderSum = $orderSum;
    }

    public function setOrderTerm(string $orderTerm): void
    {
        $this->orderTerm = $orderTerm;
    }

    public function setCallBackURL(string $callBackURL): void
    {
        $this->callBackURL = $callBackURL;
    }

    public function setShopId(?string $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function setOrderNom(?string $orderNom): void
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