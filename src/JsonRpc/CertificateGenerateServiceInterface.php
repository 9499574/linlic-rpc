<?php

namespace linlic\JsonRpc;

interface CertificateGenerateServiceInterface
{
    public function getFields(array $params):array;

    public function getConf(array $params):array;
}