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

    /**
     * 房间管理-分析数据导出到OSS文件
     * @param array $params
     * @return bool
     */
    public function getRoomAnalyzeToOssFile(array $params): bool;

    /**
     * 获取房间名称
     * @param array $roomIds
     * @return array [room_id=>room_name]
     */
    public function getRoomName(array $roomIds):array;
}
