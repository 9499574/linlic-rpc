<?php

namespace linlic\JsonRpc;

/**
 * 轮转计划子模板服务接口
 */

interface CyclePlanSubTemplateDataInitServiceInterface
{
    /**
     * 1.2022国标
     * @param array $params 入参数组
     * @return bool 处理结果
     */
    public function handle2022NationalStandard(array $params): bool;
}