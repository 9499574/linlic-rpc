<?php

namespace linlic\JsonRpc;

interface SpaceUseServiceInterface
{

    /**
     * 空间使用明细-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function spaceUseField($params):array;

    /**
     * 空间使用明细-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function spaceUseConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf(array $params):array;
}
