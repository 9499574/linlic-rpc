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
     *
     * @param string $org_id 机构id
     * @param string $system_id 系统id
     * @param string $menu_id 菜单id
     * @param string $event_name 活动名称
     * @param string $start_time 开始时间
     * @param string $end_time 结束时间
     * @param array $uid_arr 活动人员
     * @param string $qr_rf_seconds 二维码刷新时间
     * @param array $module_params 模块其他参数
     * @return array
     */
    /**
     * 活动新增二维码
     * @param array $params
     * $params中参数 string org_id 机构id system_id 系统id menu_id 菜单id event_name 活动名称 start_time 开始时间 end_time 结束时间
     * int user_limit 适用考勤对象(1不限 2指定对象) array uid_arr 考勤对象user_limit为1时非必传为2时必传
     * string qr_rf_seconds 二维码刷新时间非必填默认0 array $module_params 模块其他参数
     * @return array
     */
    public function activityAddQrcode(array $params):array;

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
    /**
     * 活动编辑二维码
     * @param array $params
     * $params中参数 string $attendance_rule_id 现场签到id event_name 活动名称 start_time 开始时间 end_time 结束时间
     * int user_limit 适用考勤对象(1不限 2指定对象) array uid_arr 考勤对象user_limit为1时非必传为2时必传
     * string qr_rf_seconds 二维码刷新时间非必填默认0 array $module_params 模块其他参数
     * @return array
     */
    public function activityEditQrcode(array $params):array;

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
