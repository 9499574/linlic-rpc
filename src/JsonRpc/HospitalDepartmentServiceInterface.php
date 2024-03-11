<?php

namespace linlic\JsonRpc;

interface HospitalDepartmentServiceInterface
{
    /**
     * 获取可用的配置
     * @return array
     */
    public function getConfigs():array;

}