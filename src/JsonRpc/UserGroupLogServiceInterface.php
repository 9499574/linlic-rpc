<?php

namespace linlic\JsonRpc;

interface UserGroupLogServiceInterface
{
    /**
     * 功能字段接口
     * @param array $params
     * @return array
     */
    public function moduleFields(array $params):array;


    /**
     * 功能配置接口
     * @param array $params
     * @return array
     */
    public function moduleConfig(array $params):array;


    /**
     * 机构设置接口
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;

    /**
     * 流程参数
     * @param array $params
     * @return array
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     * @param array $params
     * @return bool
     */
    public function flowCallBack(array $params): bool;
}