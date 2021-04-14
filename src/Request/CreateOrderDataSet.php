<?php


namespace Amida\Alfabank\Request;


class CreateOrderDataSet extends RequestDataSet
{
    public function setEmail(string $email): void
    {
        $this->attributes['eMailPartner'] = $email;
    }

    public function setMPhone(string $mPhone): void
    {
        $this->attributes['mPhone'] = $mPhone;
    }

    public function setPanEnd(string $panEnd): void
    {
        $this->attributes['panEnd'] = $panEnd;
    }

    public function setOrderId(string $orderId): void
    {
        $this->attributes['orderId'] = $orderId;
    }

    public function setOrderSum(string $orderSum): void
    {
        $this->attributes['orderSum'] = $orderSum;
    }

    public function setOrderTerm(string $orderTerm): void
    {
        $this->attributes['orderTerm'] = $orderTerm;
    }

    public function setCallBackURL(string $callBackURL): void
    {
        $this->attributes['callBackURL'] = $callBackURL;
    }

    public function setShopId(?string $shopId): void
    {
        $this->attributes['shopId'] = $shopId;
    }

    public function setOrderNom(?array $orderNom): void
    {
        $this->attributes['orderNom'] = $orderNom;
    }

    public function setOrderAdd(?string $orderAdd): void
    {
        $this->attributes['orderAdd'] = $orderAdd;
    }

    public function setOrderVat(?string $orderVat): void
    {
        $this->attributes['orderVat'] = $orderVat;
    }
}