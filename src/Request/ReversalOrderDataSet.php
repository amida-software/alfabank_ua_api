<?php


namespace Amida\Alfabank\Request;


class ReversalOrderDataSet extends RequestDataSet
{
    public function setOrderId(string $orderId): void
    {
        $this->attributes['orderId'] = $orderId;
    }

    public function setAddDataReversal(?string $addDataReversal): void
    {
        $this->attributes['addDataReversal'] = $addDataReversal;
    }

    public function setReasonReversal(?string $reasonReversal): void
    {
        $this->attributes['reasonReversal'] = $reasonReversal;
    }

    public function setReversalId(string $reversalId): void
    {
        $this->attributes['reversalId'] = $reversalId;
    }

    public function setReversalSum(string $reversalSum): void
    {
        $this->attributes['reversalSum'] = $reversalSum;
    }

    public function setReversalVat(?string $reversalVat): void
    {
        $this->attributes['reversalVat'] = $reversalVat;
    }

    public function setCallBackURL(string $callBackURL): void
    {
        $this->attributes['callBackURL'] = $callBackURL;
    }

    public function setShopId(?string $shopId): void
    {
        $this->attributes['shopId'] = $shopId;
    }
}