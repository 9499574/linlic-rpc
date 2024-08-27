<?php

namespace linlic\JsonRpc;

/**
 * 培训容量服务接口
 */
interface CycleBaseVolumeServiceInterface
{
    /**
     * 模块字段
     * @param array $params
     * @return array
     */
    public function fields(array $params):array;

    /**
     * 模块配置
     * @param array $params
     * @return array
     */
    public function configs(array $params):array;

}