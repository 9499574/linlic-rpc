<?php

namespace linlic\JsonRpc;

/**
 * 设备库存批量更新
 */
interface EquipmentBatchUpdateServiceInterface
{
    /**
     * 前置RPC
     * @param array $params
     * @return array
     */
    public function preFormConfig(array $params): array;

    /**
     * 校验RPC
     * @param array $params
     * @return array
     */
    public function validConfig(array $params):array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function templateConfig(array $params):array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function importData(array $params):array;
}