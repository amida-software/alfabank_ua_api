<?php


namespace Amida\Alfabank\Request;


class ConfirmOrderDataSet extends RequestDataSet
{
    public function setOrderId(?string $orderId): void
    {
        $this->attributes['orderId'] = $orderId;
    }

    public function setMessageId(?string $messageId): void
    {
        $this->attributes['messageId'] = $messageId;
    }
}