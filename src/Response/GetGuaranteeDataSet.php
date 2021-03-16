<?php


namespace Amida\Alfabank\Response;


class GetGuaranteeDataSet extends ResponseDataSet
{
    private ?Guarantee $guarantee;
    private ?string $base64Pdf;

    public function setDataFromObject(object $object)
    {
        parent::setDataFromObject($object);

        if ($object->guarantee) {
            $guarantee = new Guarantee();
            $guarantee->setAccrualSum($object->guarantee->accrualSum);
            $guarantee->setOrderSum($object->guarantee->orderSum);
            $guarantee->setOrderVat($object->guarantee->orderVat);
            $guarantee->setSumComis($object->guarantee->sumComis);
            $guarantee->setTransactionDate($object->guarantee->transactionDate);

            $this->setGuarantee($guarantee);
        }
        $this->setBase64Pdf($object->base64Pdf);
    }

    public function getGuarantee(): ?Guarantee
    {
        return $this->guarantee;
    }

    public function setGuarantee(?Guarantee $guarantee): void
    {
        $this->guarantee = $guarantee;
    }

    public function getBase64Pdf(): ?string
    {
        return $this->base64Pdf;
    }

    public function setBase64Pdf(?string $base64Pdf): void
    {
        $this->base64Pdf = $base64Pdf;
    }
}