<?php

namespace linlic\JsonRpc;

interface CertificateGenerateServiceInterface
{
    public function getFields(array $params):array;

    public function getConf(array $params):array;

    public function generateTemplateIdGetRpcParams(string $generate_template_id):array;

    /**
     * 生成证书
     * @param array $params
     * @return array
     */
    public function generateCertificate(array $params):array;

    /**
     * 获取用户证书
     * @param array $params
     * @return array
     */
    public function getUserCertificate(array $params):array;

    /**
     * 获取用户证书生成信息
     * @param array $params
     * @return array
     */
    public function getCertificateGenerates(array $params):array;
}