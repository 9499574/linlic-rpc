<?php

namespace linlic\JsonRpc;

interface RoomServiceInterface
{

    /**
     * 房间管理-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function roomField($params):array;

    /**
     * 房间管理-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function roomConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf(array $params):array;
}
