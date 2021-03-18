<?php


namespace Amida\Alfabank\Response;


class CheckReversalDataSet extends BasicResponseDataSet
{
    private $orderId;

    public function setDataFromObject(object $object)
    {
        $this->setOrderId($object->orderId);
        $this->setStatusCode($object->statusCode);
        $this->setStatusText($object->statusText);
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId): void
    {
        $this->orderId = $orderId;
    }
}