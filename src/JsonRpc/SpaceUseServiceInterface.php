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

    /**
     * 记录空间使用明细
     * @param array $params
     * @return array
     */
    public function recordSpaceUse(array $params):array;

    /**
     * 查询可用房间
     * @param array $params
     * @return array
     */
    public function selectAvailableRoom(array $params):array;

    /**
     * 删除空间使用明细
     * @param array $params
     * @return array
     */
    public function deleteSpaceUse(array $params):array;
}
