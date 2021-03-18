<?php


namespace Amida\Alfabank\Response;


class ResponseDataSet extends BasicResponseDataSet
{
    private $messageId;
    private $orderId;

    public function setDataFromObject(object $object)
    {
        parent::setDataFromObject($object);

        $this->setMessageId($object->messageId);
        $this->setOrderId($object->orderId);
    }

    public function getMessageId(): string
    {
        return $this->messageId;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setMessageId(string $messageId): void
    {
        $this->messageId = $messageId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }
}