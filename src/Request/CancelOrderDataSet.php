<?php


namespace Amida\Alfabank\Request;


use JsonSerializable;

class CancelOrderDataSet implements JsonSerializable
{
    private $orderId;
    private $messageId;
    private $cancelId;
    private $reasonCancel;

    public function jsonSerialize()
    {
        return [
            'orderId' => $this->orderId,
            'messageId' => $this->messageId,
            'cancelId' => $this->cancelId,
            'reasonCancel' => $this->reasonCancel,
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

    public function getCancelId(): string
    {
        return $this->cancelId;
    }

    public function getReasonCancel(): string
    {
        return $this->reasonCancel;
    }

    public function setOrderId(?string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function setMessageId(?string $messageId): void
    {
        $this->messageId = $messageId;
    }

    public function setCancelId(string $cancelId): void
    {
        $this->cancelId = $cancelId;
    }

    public function setReasonCancel(string $reasonCancel): void
    {
        $this->reasonCancel = $reasonCancel;
    }
}