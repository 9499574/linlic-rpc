<?php

namespace linlic\JsonRpc;

interface CycleAdjustServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function getfields(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function getConfs(array $params):array;

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