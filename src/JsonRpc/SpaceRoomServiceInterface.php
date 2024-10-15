<?php

namespace linlic\JsonRpc;

interface SpaceRoomServiceInterface
{

    /**
     * 空间管理（房间管理）-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function spaceRoomField($params):array;

    /**
     * 空间管理（房间管理）-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function spaceRoomConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf(array $params):array;
}
