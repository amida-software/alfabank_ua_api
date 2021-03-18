<?php


namespace Amida\Alfabank\Response;


class GetReversalDataSet extends BasicResponseDataSet
{
    private $reversalId;
    private $messageId;

    public function setDataFromObject(object $object)
    {
        parent::setDataFromObject($object);

        $this->setMessageId($object->messageId);
        $this->setReversalId($object->reversalId);
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function setMessageId($messageId): void
    {
        $this->messageId = $messageId;
    }

    public function getReversalId()
    {
        return $this->reversalId;
    }

    public function setReversalId($reversalId): void
    {
        $this->reversalId = $reversalId;
    }
}