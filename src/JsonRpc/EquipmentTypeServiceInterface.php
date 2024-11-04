<?php

namespace linlic\JsonRpc;

interface EquipmentTypeServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function equipmentTypeField(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function equipmentTypeConf(array $params):array;
}