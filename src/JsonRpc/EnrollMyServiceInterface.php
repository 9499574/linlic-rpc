<?php

namespace linlic\JsonRpc;

interface EnrollMyServiceInterface
{
    public function getFields(array $params):array;

    public function getMenuConf(array $params):array;

    public function getOrgSet(array $params):array;
}