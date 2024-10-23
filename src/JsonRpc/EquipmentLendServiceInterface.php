<?php

namespace linlic\JsonRpc;

interface EquipmentLendServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function lendField(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function lendConf(array $params):array;
}