<?php

namespace linlic\JsonRpc;

interface EquipmentUsingInfoServiceInterface
{
    /**
     * 设备使用功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function usingField(array $params):array;

    /**
     * 设备使用功能配置
     * @param array $params
     * @return array
     */
    public function usingConf(array $params):array;
}