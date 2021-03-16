<?php


namespace Amida\Alfabank;


use Amida\Alfabank\Request\CreateOrderDataSet as CreateOrderRequest;
use Amida\Alfabank\Request\UpdateOrderDataSet as UpdateOrderRequest;
use Amida\Alfabank\Request\CancelOrderDataSet as CancelOrderRequest;
use Amida\Alfabank\Response\CreateOrderDataSet as CreateOrderResponse;
use Amida\Alfabank\Response\GetOrderDataSet as GetOrderResponse;
use Amida\Alfabank\Response\GetGuaranteeDataSet as GetGuaranteeResponse;
use Amida\Alfabank\Response\UpdateOrderDataSet as UpdateOrderResponse;
use Amida\Alfabank\Response\CancelOrderDataSet as CancelOrderResponse;
use GuzzleHttp\ClientInterface;

class Service
{
    private ClientInterface $client;

    private string $url = 'https://retailapi.alfabank.kiev.ua:8243/api/PartnerInstallment/v1.0/';

    private string $partner;
    private string $user;
    private string $password;

    public function createOrder(CreateOrderRequest $createOrderDataSet): CreateOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->url.'createOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $createOrderDataSet,
        ]);

        return new CreateOrderResponse($httpResponse);
    }

    public function getOrderByOrderId(string $id): GetOrderResponse
    {
        $httpResponse = $this->client->request('get', $this->url.'getOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['orderId' => $id],
        ]);

        return new GetOrderResponse($httpResponse);
    }

    public function getOrderByMessageId(string $id): GetOrderResponse
    {
        $httpResponse = $this->client->request('get', $this->url.'getOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['messageId' => $id],
        ]);

        return new GetOrderResponse($httpResponse);
    }

    public function getGuaranteeByOrderId(string $id): GetGuaranteeResponse
    {
        $httpResponse = $this->client->request('get', $this->url.'getGuarantee/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['orderId' => $id],
        ]);

        return new GetGuaranteeResponse($httpResponse);
    }

    public function getGuaranteeByMessageId(string $id): GetGuaranteeResponse
    {
        $httpResponse = $this->client->request('get', $this->url.'getGuarantee/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['messageId' => $id],
        ]);

        return new GetGuaranteeResponse($httpResponse);
    }

    public function updateOrder(UpdateOrderRequest $updateOrderDataSet): UpdateOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->url.'updateOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $updateOrderDataSet,
        ]);

        return new UpdateOrderResponse($httpResponse);
    }

    public function cancelOrder(CancelOrderRequest $cancelOrderDataSet): CancelOrderResponse
    {
        $httpResponse = $this->client->request('post', $this->url.'cancelOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'json' => $cancelOrderDataSet,
        ]);

        return new CancelOrderResponse($httpResponse);
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