<?php

namespace linlic\JsonRpc;

interface EquipmentServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function equipmentInventoryField(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function equipmentInventoryConf(array $params):array;

    /**
     * 获取设备可用状态下拉选项
     * @param array $params
     * @return array
     */
    public function getEquipmentStatusOptions(array $params):array;

    /**
     * 获取设备存放房间下拉选项
     * @param array $params
     * @return array
     */
    public function getRoomOptions(array $params):array;


}