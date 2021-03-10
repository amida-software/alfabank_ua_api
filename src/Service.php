<?php


namespace Amida\Alfabank;


use Amida\Alfabank\Request\CreateOrderDataSet as Request;
use Amida\Alfabank\Response\CreateOrderDataSet as Response;

class Service
{
    public function createOrder(Request $createOrderDataSet): Response
    {
        return new Response();
    }
}