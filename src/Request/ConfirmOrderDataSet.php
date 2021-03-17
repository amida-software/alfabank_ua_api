<?php


namespace Amida\Alfabank\Request;


class ConfirmOrderDataSet
{
    private $orderId;
    private $messageId;

    public function jsonSerialize()
    {
        return [
            'orderId' => $this->orderId,
            'messageId' => $this->messageId,
        ];
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function setMessageId(?string $messageId): void
    {
        $this->messageId = $messageId;
    }
}