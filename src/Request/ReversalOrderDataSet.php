<?php


namespace Amida\Alfabank\Request;


use JsonSerializable;

class ReversalOrderDataSet implements JsonSerializable
{
    private $orderId;
    private $reversalId;
    private $reversalSum;
    private $reasonReversal;
    private $addDataReversal;
    private $reversalVat;
    private $callBackURL;
    private $shopId;

    public function jsonSerialize()
    {
        return [
            'orderId' => $this->orderId,
            'reversalId' => $this->reversalId,
            'reversalSum' => $this->reversalSum,
            'reasonReversal' => $this->reasonReversal,
            'addDataReversal' => $this->addDataReversal,
            'reversalVat' => $this->reversalVat,
            'callBackURL' => $this->callBackURL,
            'shopId' => $this->shopId,
        ];
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getAddDataReversal()
    {
        return $this->addDataReversal;
    }

    public function getReasonReversal()
    {
        return $this->reasonReversal;
    }

    public function getReversalId()
    {
        return $this->reversalId;
    }

    public function getReversalSum()
    {
        return $this->reversalSum;
    }

    public function getReversalVat()
    {
        return $this->reversalVat;
    }

    public function getCallBackURL(): string
    {
        return $this->callBackURL;
    }

    public function getShopId(): ?string
    {
        return $this->shopId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function setAddDataReversal($addDataReversal): void
    {
        $this->addDataReversal = $addDataReversal;
    }

    public function setReasonReversal($reasonReversal): void
    {
        $this->reasonReversal = $reasonReversal;
    }

    public function setReversalId($reversalId): void
    {
        $this->reversalId = $reversalId;
    }

    public function setReversalSum($reversalSum): void
    {
        $this->reversalSum = $reversalSum;
    }

    public function setReversalVat($reversalVat): void
    {
        $this->reversalVat = $reversalVat;
    }

    public function setCallBackURL(string $callBackURL): void
    {
        $this->callBackURL = $callBackURL;
    }

    public function setShopId(?string $shopId): void
    {
        $this->shopId = $shopId;
    }
}