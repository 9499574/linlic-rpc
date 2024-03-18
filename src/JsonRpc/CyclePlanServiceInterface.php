<?php

namespace linlic\JsonRpc;

interface CyclePlanServiceInterface
{
    public function planField($params):array;

    public function planConf($params):array;
}