<?php


namespace Amida\Alfabank;


use Amida\Alfabank\Request\CreateOrderDataSet as CreateOrderRequest;
use Amida\Alfabank\Request\UpdateOrderDataSet as UpdateOrderRequest;
use Amida\Alfabank\Request\CancelOrderDataSet as CancelOrderRequest;
use Amida\Alfabank\Request\ConfirmOrderDataSet as ConfirmOrderRequest;
use Amida\Alfabank\Request\ReversalOrderDataSet as ReversalOrderRequest;
use Amida\Alfabank\Response\CreateOrderDataSet as CreateOrderResponse;
use Amida\Alfabank\Response\GetOrderDataSet as GetOrderResponse;
use Amida\Alfabank\Response\GetGuaranteeDataSet as GetGuaranteeResponse;
use Amida\Alfabank\Response\UpdateOrderDataSet as UpdateOrderResponse;
use Amida\Alfabank\Response\CancelOrderDataSet as CancelOrderResponse;
use Amida\Alfabank\Response\ConfirmOrderDataSet as ConfirmOrderResponse;
use Amida\Alfabank\Response\CheckReversalDataSet as CheckReversalResponse;
use Amida\Alfabank\Response\ReversalOrderDataSet as ReversalOrderResponse;
use Amida\Alfabank\Response\GetReversalDataSet as GetReversalResponse;
use GuzzleHttp\ClientInterface;

class Service
{
    private $client;

    private $url = 'https://retailapi.alfabank.kiev.ua:8243/api/PartnerInstallment/v1.0/';

    private $partner;
    private $user;
    private $password;

    public function createOrder(CreateOrderRequest $createOrderDataSet): CreateOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->getUrl().'createOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $createOrderDataSet,
        ]);

        return new CreateOrderResponse($httpResponse);
    }

    public function getOrderByOrderId(string $id): GetOrderResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'getOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['orderId' => $id],
        ]);

        return new GetOrderResponse($httpResponse);
    }

    public function getOrderByMessageId(string $id): GetOrderResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'getOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['messageId' => $id],
        ]);

        return new GetOrderResponse($httpResponse);
    }

    public function getGuaranteeByOrderId(string $id): GetGuaranteeResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'getGuarantee/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['orderId' => $id],
        ]);

        return new GetGuaranteeResponse($httpResponse);
    }

    public function getGuaranteeByMessageId(string $id): GetGuaranteeResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'getGuarantee/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['messageId' => $id],
        ]);

        return new GetGuaranteeResponse($httpResponse);
    }

    public function updateOrder(UpdateOrderRequest $updateOrderDataSet): UpdateOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->getUrl().'updateOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $updateOrderDataSet,
        ]);

        return new UpdateOrderResponse($httpResponse);
    }

    public function cancelOrder(CancelOrderRequest $cancelOrderDataSet): CancelOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->getUrl().'cancelOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $cancelOrderDataSet,
        ]);

        return new CancelOrderResponse($httpResponse);
    }

    public function confirmOrder(ConfirmOrderRequest $confirmOrderDataSet): ConfirmOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->getUrl().'confirmOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $confirmOrderDataSet,
        ]);

        return new ConfirmOrderResponse($httpResponse);
    }

    public function checkReversal(string $id, int $reversalSum): CheckReversalResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'checkReversal/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['orderId' => $id, 'reversalSum' => $reversalSum],
        ]);

        return new CheckReversalResponse($httpResponse);
    }

    public function reversalOrder(ReversalOrderRequest $reversalOrderDataSet): ReversalOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->getUrl().'cancelOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $reversalOrderDataSet,
        ]);

        return new ReversalOrderResponse($httpResponse);
    }

    public function getReversalByReversalId(string $id): GetReversalResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'getReversal/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['reversalId' => $id],
        ]);

        return new GetReversalResponse($httpResponse);
    }

    public function getReversalByMessageId(string $id): GetReversalResponse
    {
        $httpResponse = $this->client->request('get', $this->getUrl().'getReversal/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['messageId' => $id],
        ]);

        return new GetReversalResponse($httpResponse);
    }

    public function getClient(): ClientInterface
    {
        return $this->client;
    }

    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getPartner(): string
    {
        return $this->partner;
    }

    public function setPartner(string $partner): void
    {
        $this->partner = $partner;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}