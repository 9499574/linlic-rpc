<?php

namespace linlic\JsonRpc;

interface CertificateTemplateServiceInterface
{
    /**
     * 模块字段
     * @param array $params
     * @return array
     */
    public function fields(array $params):array;
}