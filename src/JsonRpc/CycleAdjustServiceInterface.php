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


}