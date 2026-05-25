<?php

namespace linlic\JsonRpc;

/**
 * 模块数据统计-考试
 */
interface MSExamServiceInterface
{
    /**
     * 维度类型-字典
     * @param array $params
     * @return array
     */
    public function dictDimension(array $params): array;

    /**
     * 筛选条件-字典
     * @param array $params
     * @return array
     */
    public function dictFilter(array $params): array;
}