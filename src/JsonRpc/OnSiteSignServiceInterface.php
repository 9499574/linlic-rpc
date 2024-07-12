<?php

namespace linlic\JsonRpc;

interface OnSiteSignServiceInterface
{
    /*
    * 考勤管理-根据方法名和参数，调用rpc接口
    * @param string $funcName
    * @param array $params
    * @return array
    */
    public function getFuncName(string $funcName,array $params):array;
    /**
     * 日常考勤列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 日常考勤列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 活动新增二维码
     * @param string $org_id 机构id
     * @param string $system_id 系统id
     * @param string $menu_id 菜单id
     * @param string $event_name 活动名称
     * @param string $start_time 开始时间
     * @param string $end_time 结束时间
     * @param array $uid_arr 活动人员
     * @param string $qr_rf_seconds 二维码刷新时间
     * @param array $module_params 模块其他参数
     * @return array 返回的有attendance_rule_id qrcode_url
     */
    public function activityAddQrcode(string $org_id,string $system_id,string $menu_id,string $event_name,string $start_time,string $end_time,array $uid_arr,string $qr_rf_seconds,array $module_params):array;

    /**
     * 活动编辑二维码
     * @param string $attendance_rule_id 现场签到id
     * @param string $event_name 活动名称
     * @param string $start_time 开始时间
     * @param string $end_time 结束时间
     * @param array $uid_arr 活动人员
     * @param string $qr_rf_seconds 二维码刷新时间
     * @param array $module_params 模块其他参数
     * @return array attendance_rule_id qrcode_url
     */
    public function activityEditQrcode(string $attendance_rule_id,string $event_name,string $start_time,string $end_time,array $uid_arr,string $qr_rf_seconds,array $module_params):array;

    /**
     * 活动删除二维码
     * @param string $attendance_rule_id 现场签到id
     * @return array
     */
    public function activityDeleteQrcode(string $attendance_rule_id):array;

    /**
     * 现场签到机构设置
     * @param array $params
     * @return array
     */
    public function getSets(array $params):array;
}
