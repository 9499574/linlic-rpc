<?php

namespace linlic\JsonRpc;

/**
 * 模块数据统计-教学活动
 */
interface MSTeachingActivitiesServiceInterface
{
    /**
     * 维度类型-个人
     * @param array $params
     * @return array
     */
    public function userDimension(array $params):array;

    /**
     * 筛选条件-个人
     * @param array $params
     * @return array
     */
    public function userFilter(array $params):array;

    /**
     * 维度类型-字典
     * @param array $params
     * @return array
     */
    public function dictDimension(array $params):array;

    /**
     * 筛选条件-字典
     * @param array $params
     * @return array
     */
    public function dictFilter(array $params):array;
}