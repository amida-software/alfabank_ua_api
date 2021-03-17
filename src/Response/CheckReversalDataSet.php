<?php


namespace Amida\Alfabank\Response;


class CheckReversalDataSet extends ResponseDataSet
{
    public function setDataFromObject(object $object)
    {
        $this->setOrderId($object->orderId);
        $this->setStatusCode($object->statusCode);
        $this->setStatusText($object->statusText);
    }
}