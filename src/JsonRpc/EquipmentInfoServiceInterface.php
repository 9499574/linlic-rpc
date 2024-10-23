<?php

namespace linlic\JsonRpc;

interface EquipmentInfoServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function equipmentInfoField(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function equipmentInfoConf(array $params):array;
}