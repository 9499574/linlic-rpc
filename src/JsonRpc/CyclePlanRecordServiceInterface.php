<?php

namespace linlic\JsonRpc;

/**
 * 排班记录服务
 */
interface CyclePlanRecordServiceInterface
{
    /**
     * 获取列表过滤选项
     * @param array $params
     * @param array $data
     * @return array
     */
    public function getListFilterOptions(array $params,array $data): array;
}