<?php


namespace Amida\Alfabank;


use Amida\Alfabank\Request\CreateOrderDataSet as Request;
use Amida\Alfabank\Response\CreateOrderDataSet as Response;
use GuzzleHttp\ClientInterface;

class Service
{
    private ClientInterface $client;

    private string $url = 'https://retailapi.alfabank.kiev.ua:8243/api/PartnerInstallment/v1.0/';

    private string $partner;
    private string $password;

    public function createOrder(Request $createOrderDataSet): Response
    {
        $httpResponse = $this->client->request('post', $this->url.'createOrder/'.$this->partner, [
            'auth' => [$this->partner, $this->password],
            'json' => $createOrderDataSet,
            //'debug' => true,
            //'cert' => ini_get('curl.cainfo')
        ]);

        $objectResponse = json_decode($httpResponse->getBody());

        $response = new Response;
        $response->setMessageId($objectResponse->messageId);
        $response->setOrderId($objectResponse->orderId);
        $response->setStatusCode($objectResponse->statusCode);
        $response->setStatusText($objectResponse->statusText);

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

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}