<?php

namespace linlic\JsonRpc;

interface NoticeServiceInterface
{
    /**
     * 获取公告管理列表字段数据
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields(array $params): array;
    /**
     * 公告管理-功能配置
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function noticeConf($params):array;

    /**
     * 获取我的消息列表字段数据
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getMyNoticeFields($params):array;

    /**
     * 推送消息
     * @param string $org_id
     * @param string $system_id
     * @param string $menu_id
     * @param string $notice_title          标题  如果想加其他内容 请自行拼接
     * @param string $push_content          内容
     * @param string $push_uid              推送人
     * @param array $push_object_value_uid  接收人 [5555,6666,7777]
     * @param array $special                特殊信息，暂不考虑
     * @return bool|string
     */
    public function sendMessage(
        string $org_id,
        string $system_id,
        string $menu_id,
        string $notice_title,
        string $push_content,
        string $push_uid,
        array $push_object_value_uid,
        array $special = []
    ): bool|string;
}