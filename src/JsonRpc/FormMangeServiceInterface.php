<?php

namespace linlic\JsonRpc;

interface FormMangeServiceInterface
{
    public function getFields(array $params):array;

    public function getMenConf(array $params):array;

    public function getOrgSet(array $params):array;
}