<?php


namespace Amida\Alfabank\Response;


class GetGuaranteeDataSet extends ResponseDataSet
{
    private $middleNameUkr;
    private $nameUkr;
    private $taxId;
    private $firstNameUkr;
    private $lastNameUkr;

    private $guarantee;
    private $base64Pdf;

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
        $this->setMiddleNameUkr($object->middleNameUkr);
        $this->setNameUkr($object->nameUkr);
        $this->setTaxId($object->taxId);
        $this->setFirstNameUkr($object->firstNameUkr);
        $this->setLastNameUkr($object->lastNameUkr);

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

    public function getFirstNameUkr()
    {
        return $this->firstNameUkr;
    }

    public function getLastNameUkr()
    {
        return $this->lastNameUkr;
    }

    public function getMiddleNameUkr()
    {
        return $this->middleNameUkr;
    }

    public function getNameUkr()
    {
        return $this->nameUkr;
    }

    public function getTaxId()
    {
        return $this->taxId;
    }

    public function setFirstNameUkr($firstNameUkr): void
    {
        $this->firstNameUkr = $firstNameUkr;
    }

    public function setLastNameUkr($lastNameUkr): void
    {
        $this->lastNameUkr = $lastNameUkr;
    }

    public function setMiddleNameUkr($middleNameUkr): void
    {
        $this->middleNameUkr = $middleNameUkr;
    }

    public function setNameUkr($nameUkr): void
    {
        $this->nameUkr = $nameUkr;
    }

    public function setTaxId($taxId): void
    {
        $this->taxId = $taxId;
    }
}