<?php

namespace linlic\JsonRpc;

/**
 * 流程注册服务接口
 * https://thoughts.aliyun.com/workspaces/656d4c93bc80e5001b7d0d9b/docs/66557f0f51244b0001c18eb6
 */
interface FlowRegisterServiceInterface
{
    /**
     * 功能参数
     * @param array $params
     * @return array
     */
    public function params(array $params):array;

    /**
     * 统计接口
     * @param array $params
     * @return array
     */
    public function statistics(array $params):array;

    /**
     * 回调地址
     * @param array $params
     * @return array
     */
    public function callback(array $params):array;
}