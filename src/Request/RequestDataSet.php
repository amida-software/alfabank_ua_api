<?php


namespace Amida\Alfabank\Request;


use JsonSerializable;

class RequestDataSet implements JsonSerializable
{
    protected $attributes = [];

    public function jsonSerialize()
    {
        return $this->attributes;
    }
}