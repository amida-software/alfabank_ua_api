<?php


namespace Amida\Alfabank\Request;


class CancelOrderDataSet extends RequestDataSet
{
    public function setOrderId(?string $orderId): void
    {
        $this->attributes['orderId'] = $orderId;
    }

    public function setMessageId(?string $messageId): void
    {
        $this->attributes['messageId'] = $messageId;
    }

    public function setCancelId(string $cancelId): void
    {
        $this->attributes['cancelId'] = $cancelId;
    }

    public function setReasonCancel(string $reasonCancel): void
    {
        $this->attributes['reasonCancel'] = $reasonCancel;
    }
}