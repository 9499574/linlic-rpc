<?php

namespace linlic\JsonRpc;

interface CyclePlanServiceInterface
{
    public function planField():array;

    public function planConf():array;
}