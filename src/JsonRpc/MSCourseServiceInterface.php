<?php

namespace linlic\JsonRpc;

/**
 * 模块数据统计-学习课程
 */
interface MSCourseServiceInterface
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
}