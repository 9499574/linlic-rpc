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
     * @param string $notice_title 标题  如果想加其他内容 请自行拼接
     * @param string $push_time 推送时间。如果是定时推送，则需传推送时间；如果是立即推送则不要传该参数
     * @param string $push_content 内容
     * @param string $push_uid 推送人
     * @param array $push_object_value_uid 接收人 [5555,6666,7777]
     * @param array $special 特殊信息，暂不考虑
     * @return bool|string
     */
    public function sendMessage(
        string $org_id,
        string $system_id,
        string $menu_id,
        string $notice_title,
        string $push_time,
        string $push_content,
        string $push_uid,
        array $push_object_value_uid,
        array $special = []
    ): bool|string;

    /**
     * 根据消息中心配置 来推送不同的消息内容
     * @param string $org_id    机构ID
     * @param string $system_id 系统id
     * @param string $menu_id   菜单ID
     * @param string $push_uid  推送人uid
     * @param string $url   地址
     * @param array $url_params  地址参数
     * @param array $whereArr   和配置的rpc接口定义的字段名一样，比如['event_type'=>'add','user_object'=>['user'=>[1,2,3],'zjr'=>[4,5,6]],'module_field'=>["cate"=>'小讲课',"title"=>"标题","start_time"=>"2024-08-01 10:00:00"]]
     * @param array $special    特殊信息，暂不考虑
     * @return array code == 0成功，否则失败
     */
    public function modulePushNotice(string $org_id, string $system_id, string $menu_id, string $push_uid, string $url = '',array $url_params = [], array $whereArr = [], array $special = []): array;

    /**
     * 批量插入规则配置详情
     * @param array $data
     * @return bool
     */
    public function ruleInsertConfigDetail(array $data):bool;
}