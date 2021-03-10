<?php

use Amida\Alfabank;
use PHPUnit\Framework\TestCase;

class CreateOrderTest extends TestCase
{
    public function testCreateOrder(): void
    {
        $service = new Alfabank\Service;
        $service->setClient(new \GuzzleHttp\Client());
        $service->setPartner('AntECOM');
        $service->setPassword('8Jh0#bT1');

        $data = new Alfabank\Request\CreateOrderDataSet;
        $data->setMPhone('+380671111111');
        $data->setPanEnd('9654');
        $data->setOrderId('p18');
        $data->setOrderSum('121600');
        $data->setOrderTerm('9');
        $data->setCallBackURL('https://dpartnapu01.alfa.bank.int:8243/installmentseventwo/orders');
        $data->setShopId('46546-БwfqК');
        $data->setOrderNom('test');
        $data->setOrderAdd('test');
        $data->setOrderVat('test');

        $response = $service->createOrder($data);

        $this->assertInstanceOf(Alfabank\Response\CreateOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
    }
}
