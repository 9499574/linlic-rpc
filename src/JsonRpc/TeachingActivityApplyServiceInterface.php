<?php

namespace linlic\JsonRpc;

interface TeachingActivityApplyServiceInterface
{
    /**
     * 课程申请审核回调
     * @param $params
     * @return bool
     */
    public function reviewCallBack($params): bool;

    /**
     * 获取用户类型
     * @param $params
     * @return array
     */
    public function reviewUserType($params): array;

    /**
     * 流程参数
     * @param array $params
     * @return array
     */
    public function flowParams(array $params): array;

    /**
     * 获取表单字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 获取配置
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params): array;
}