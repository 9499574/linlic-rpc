<?php

namespace linlic\JsonRpc;

interface MockMenuSetServiceInterface
{
    public function getFields(array $params):array;

    public function getConfigs(array $params):array;
}