<?php

namespace linlic\JsonRpc;

interface AdmissionAppleServiceInterface
{
    public function formSubmitCallback(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function admissionApplyConf(array $params):array;
}