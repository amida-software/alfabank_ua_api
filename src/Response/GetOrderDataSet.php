<?php


namespace Amida\Alfabank\Response;


class GetOrderDataSet extends ResponseDataSet
{
    private ?string $mPhone;
    private ?string $panEnd;
    private ?string $orderSum;
    private ?string $orderTerm;
    private ?string $shopId;
    private ?array $orderNom;
    private ?string $orderAdd;
    private ?string $orderVat;

    public function setDataFromObject(object $object)
    {
        parent::setDataFromObject($object);

        $this->setMPhone($object->mPhone);
        $this->setPanEnd($object->panEnd);
        $this->setOrderSum($object->orderSum);
        $this->setOrderTerm($object->orderTerm);
        $this->setShopId($object->shopId);
        $this->setOrderNom($object->orderNom);
        $this->setOrderAdd($object->orderAdd);
        $this->setOrderVat($object->orderVat);
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