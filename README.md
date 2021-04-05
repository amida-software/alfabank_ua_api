# Alfa-Bank API

## Requirements

* PHP ^7.2
* ext-json
* ext-curl

## Usage

Create Order
```
use Amida\Alfabank;

$service = new Alfabank\Service;
$service->setClient(new \GuzzleHttp\Client());
$service->setPartner('partner');
$service->setUser('partner');
$service->setPassword('!PaRt_Ne09_R#');

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

$response = $service->createOrder($data);

$statusCode = $response->getStatusCode();
SstatusText = $response->getStatusText();
$messageId = $response->getMessageId();
$orderId = $response->getOrderId();
```