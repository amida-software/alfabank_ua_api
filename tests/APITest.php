<?php

use Amida\Alfabank;
use PHPUnit\Framework\TestCase;

class APITest extends TestCase
{
    private static $service;

    public function testCreateOrder(): void
    {
        $data = new Alfabank\Request\CreateOrderDataSet;
        $data->setEmail('test@example.com');
        $data->setMPhone('+380671111111');
        $data->setPanEnd('9654');
        $data->setOrderId('p181');
        $data->setOrderSum('121600');
        $data->setOrderTerm('9');
        $data->setCallBackURL('https://dpartnapu01.alfa.bank.int:8243/installmentseventwo/orders');
        $data->setShopId('46546-БwfqК');
        $data->setOrderNom(['test']);
        $data->setOrderAdd('test');
        $data->setOrderVat('test');

        $response = self::$service->createOrder($data);

        $this->assertInstanceOf(Alfabank\Response\CreateOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
    }

    public function testGetOrderByOrderId(): void
    {
        $response = self::$service->getOrderByOrderId('p42');

        $this->assertInstanceOf(Alfabank\Response\GetOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
        $this->assertIsString($response->getMPhone());
        $this->assertIsString($response->getPanEnd());
        $this->assertIsString($response->getOrderSum());
        $this->assertIsString($response->getOrderTerm());
        $this->assertIsString($response->getShopId());
        $this->assertIsArray($response->getOrderNom());
        $this->assertIsString($response->getOrderAdd());
        $this->assertIsString($response->getOrderVat());
    }

    public function testGetOrderByMessageId(): void
    {
        $response = self::$service->getOrderByMessageId('BD43709E89C8335BE0539B5A8F0A15B6');

        $this->assertInstanceOf(Alfabank\Response\GetOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
        $this->assertIsString($response->getMPhone());
        $this->assertIsString($response->getPanEnd());
        $this->assertIsString($response->getOrderSum());
        $this->assertIsString($response->getOrderTerm());
        $this->assertIsString($response->getShopId());
        $this->assertIsArray($response->getOrderNom());
        $this->assertIsString($response->getOrderAdd());
        $this->assertIsString($response->getOrderVat());
    }

    public function testGetGuaranteeByOrderId(): void
    {
        $response = self::$service->getGuaranteeByOrderId('p42');

        $this->assertInstanceOf(Alfabank\Response\GetGuaranteeDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
        $this->assertIsString($response->getBase64Pdf());
        $this->assertInstanceOf(Alfabank\Response\Guarantee::class, $response->getGuarantee());
    }

    public function testGetGuaranteeByMessageId(): void
    {
        $response = self::$service->getGuaranteeByMessageId('BD43709E89C8335BE0539B5A8F0A15B6');

        $this->assertInstanceOf(Alfabank\Response\GetGuaranteeDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
        $this->assertIsString($response->getBase64Pdf());
        $this->assertInstanceOf(Alfabank\Response\Guarantee::class, $response->getGuarantee());
    }

    public function testUpdateOrder(): void
    {
        $data = new Alfabank\Request\UpdateOrderDataSet;
        $data->setMPhone('+380671111111');
        $data->setPanEnd('9654');
        $data->setOrderId('p181');
        $data->setMessageId('BD43709E89C8335BE0539B5A8F0A15B6');
        $data->setOrderSum('121600');
        $data->setOrderTerm('9');
        $data->setOrderNom(['test']);
        $data->setOrderAdd('test');
        $data->setOrderVat('test');

        $response = self::$service->updateOrder($data);

        $this->assertInstanceOf(Alfabank\Response\UpdateOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
    }

    public function testCancelOrder(): void
    {
        $data = new Alfabank\Request\CancelOrderDataSet;
        $data->setOrderId('p181');
        $data->setMessageId('BD43709E89C8335BE0539B5A8F0A15B6');
        $data->setCancelId ('121600');
        $data->setReasonCancel ('test');

        $response = self::$service->cancelOrder($data);

        $this->assertInstanceOf(Alfabank\Response\CancelOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
    }

    public function testConfirmOrder(): void
    {
        $data = new Alfabank\Request\ConfirmOrderDataSet;
        $data->setOrderId('p181');
        $data->setMessageId('BD43709E89C8335BE0539B5A8F0A15B6');

        $response = self::$service->confirmOrder($data);

        $this->assertInstanceOf(Alfabank\Response\ConfirmOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
    }

    public function testCheckReversal(): void
    {
        $response = self::$service->checkReversal('p42', 221600);

        $this->assertInstanceOf(Alfabank\Response\CheckReversalDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getOrderId());
    }

    public function testReversalOrder(): void
    {
        $data = new Alfabank\Request\ReversalOrderDataSet;
        $data->setOrderId('p42');
        $data->setReversalId('test');
        $data->setReversalSum('121600');
        $data->setReasonReversal ('test');
        $data->setAddDataReversal ('test');
        $data->setReversalVat('121600');
        $data->setCallBackURL('https://dpartnapu01.alfa.bank.int:8243/installmentseventwo/orders');
        $data->setShopId('46546-БwfqК');

        $response = self::$service->reversalOrder($data);

        $this->assertInstanceOf(Alfabank\Response\ReversalOrderDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getMessageId());
        $this->assertIsString($response->getOrderId());
    }

    public function testGetReversalByReversalId(): void
    {
        $response = self::$service->getReversalByReversalId('p42');

        $this->assertInstanceOf(Alfabank\Response\GetReversalDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getReversalId());
        $this->assertIsString($response->getMessageId());
    }

    public function testGetReversalByMessageId(): void
    {
        $response = self::$service->getReversalByMessageId('BD43709E89C8335BE0539B5A8F0A15B6');

        $this->assertInstanceOf(Alfabank\Response\GetReversalDataSet::class, $response);
        $this->assertIsString($response->getStatusCode());
        $this->assertIsString($response->getStatusText());
        $this->assertIsString($response->getReversalId());
        $this->assertIsString($response->getMessageId());
    }

    public static function setUpBeforeClass(): void
    {
        self::$service = self::createService();
    }

    private static function createService(): Alfabank\Service
    {
        $service = new Alfabank\Service;
        $service->setClient(new \GuzzleHttp\Client());
        $service->setPartner('partner');
        $service->setUser('partner');
        $service->setPassword('!PaRt_Ne09_R#');

        return $service;
    }
}
