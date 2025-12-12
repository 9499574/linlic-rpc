<?php

namespace linlic\JsonRpc;

/**
 * 模块数据统计-教学活动
 */
interface MSTeachingActivitiesServiceInterface
{
    /**
     * 维度类型
     * @param array $params
     * @return array
     */
    public function dimension(array $params):array;

    /**
     * 筛选条件
     * @param array $params
     * @return array
     */
    public function filter(array $params):array;
}