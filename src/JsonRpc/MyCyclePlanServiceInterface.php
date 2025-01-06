<?php

namespace linlic\JsonRpc;

interface MyCyclePlanServiceInterface
{
    public function getFields(array $params):array;


    public function getFieldOptions(array $params):array;
}