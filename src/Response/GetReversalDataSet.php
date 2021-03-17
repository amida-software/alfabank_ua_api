<?php


namespace Amida\Alfabank\Response;


class GetReversalDataSet extends ResponseDataSet
{
    private $reversalId;

    public function setDataFromObject(object $object)
    {
        $this->setMessageId($object->messageId);
        $this->setReversalId($object->reversalId);
        $this->setStatusCode($object->statusCode);
        $this->setStatusText($object->statusText);
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