<?php

namespace linlic\JsonRpc;

interface UserCertificateServiceInterface
{
    public function getParams(array $params):array;

    public function details(array $params):array;
}