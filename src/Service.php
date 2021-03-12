<?php


namespace Amida\Alfabank;


use Amida\Alfabank\Request\CreateOrderDataSet as CreateOrderRequest;
use Amida\Alfabank\Response\CreateOrderDataSet as CreateOrderResponse;
use Amida\Alfabank\Response\GetOrderDataSet as GetOrderResponse;
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

        $objectResponse = json_decode($httpResponse->getBody());

        $response = new CreateOrderResponse;
        $response->setMessageId($objectResponse->messageId);
        $response->setOrderId($objectResponse->orderId);
        $response->setStatusCode($objectResponse->statusCode);
        $response->setStatusText($objectResponse->statusText);

        return $response;
    }

    public function getOrderByOrderId(string $id): GetOrderResponse
    {
        $httpResponse = $this->client->request('get', $this->url.'getOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['orderId' => $id],
        ]);

        $objectResponse = json_decode($httpResponse->getBody());

        $response = new GetOrderResponse;
        $response->setMessageId($objectResponse->messageId);
        $response->setOrderId($objectResponse->orderId);
        $response->setStatusCode($objectResponse->statusCode);
        $response->setStatusText($objectResponse->statusText);

        $response->setMPhone($objectResponse->mPhone);
        $response->setPanEnd($objectResponse->panEnd);
        $response->setOrderId($objectResponse->orderId);
        $response->setOrderSum($objectResponse->orderSum);
        $response->setOrderTerm($objectResponse->orderTerm);
        $response->setShopId($objectResponse->shopId);
        $response->setOrderNom($objectResponse->orderNom);
        $response->setOrderAdd($objectResponse->orderAdd);
        $response->setOrderVat($objectResponse->orderVat);

        return $response;
    }

    public function getOrderByMessageId(string $id): GetOrderResponse
    {
        $httpResponse = $this->client->request('get', $this->url.'getOrder/'.$this->partner, [
            'auth' => [$this->user, $this->password],
            'query' => ['messageId' => $id],
        ]);

        $objectResponse = json_decode($httpResponse->getBody());

        $response = new GetOrderResponse;
        $response->setMessageId($objectResponse->messageId);
        $response->setOrderId($objectResponse->orderId);
        $response->setStatusCode($objectResponse->statusCode);
        $response->setStatusText($objectResponse->statusText);

        $response->setMPhone($objectResponse->mPhone);
        $response->setPanEnd($objectResponse->panEnd);
        $response->setOrderId($objectResponse->orderId);
        $response->setOrderSum($objectResponse->orderSum);
        $response->setOrderTerm($objectResponse->orderTerm);
        $response->setShopId($objectResponse->shopId);
        $response->setOrderNom($objectResponse->orderNom);
        $response->setOrderAdd($objectResponse->orderAdd);
        $response->setOrderVat($objectResponse->orderVat);

        return $response;
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