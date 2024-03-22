<?php

namespace linlic\JsonRpc;

interface CycleViewServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function viewField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function viewConf(array $params):array;
}