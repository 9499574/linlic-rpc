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

    /**
     * 外借流程审核回调
     * @param array $params
     * @return bool
     */
    public function lendAuditCallback(array $params): bool;

    /**
     * 归还流程审核回调
     * @param array $params
     * @return bool
     */
    public function returnAuditCallback(array $params): bool;

    /**
     * 外借流程参数
     * @param array $params
     * @return array
     */
    public function lendFlowParams(array $params): array;

    /**
     * 归还流程参数
     * @param array $params
     * @return array
     */
    public function returnFlowParams(array $params): array;
}