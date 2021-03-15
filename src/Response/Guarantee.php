<?php


namespace Amida\Alfabank\Response;


class Guarantee
{
    private string $transactionDate;
    private int $orderSum;
    private int $orderVat;
    private int $sumComis;
    private int $accrualSum;

    public function getTransactionDate(): string
    {
        return $this->transactionDate;
    }

    public function setTransactionDate(string $transactionDate): void
    {
        $this->transactionDate = $transactionDate;
    }

    public function getOrderSum(): int
    {
        return $this->orderSum;
    }

    public function setOrderSum(int $orderSum): void
    {
        $this->orderSum = $orderSum;
    }

    public function getOrderVat(): int
    {
        return $this->orderVat;
    }

    public function setOrderVat(int $orderVat): void
    {
        $this->orderVat = $orderVat;
    }

    public function getSumComis(): int
    {
        return $this->sumComis;
    }

    public function setAccrualSum(int $accrualSum): void
    {
        $this->accrualSum = $accrualSum;
    }

    public function getAccrualSum(): int
    {
        return $this->accrualSum;
    }

    public function setSumComis(int $sumComis): void
    {
        $this->sumComis = $sumComis;
    }
}