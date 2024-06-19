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

    /**
     * 可用的出科考核项
     * @param array $params
     * @return array
     */
    public function LeaveDeptItem(array $params):array;

    /**
     * 保存机构出科设置
     * @param string $org_id 机构id
     * @param string $system_id 系统id
     * @param string $menu_id 菜单id
     * @param array $conf 菜单配置中的出科设置
     * @param string $created_by 创建时间
     * @return bool
     */
    public function saveOrgLeaveDeptSet(string $org_id,string $system_id,string $menu_id,array $conf,string $created_by):bool;

    /**
     * 数据共享
     * @param $params
     * @return array
     */
    public function dataSharing($params):array;

    /**
     * 获取出科人员
     * @param string $org_id 机构id 不能为空
     * @param array $menu_id 轮转排班菜单数组 不能为空
     * @param array $uid 学生数组，可以为空
     * @param array $date 时间段 ['2024-05-01','2024-05-31'] 可以为空
     * @param array $hd_id 本院科室数组 可以为空
     * @param array $sd_id 标准科室数组 可以为空
     * @param array $stage 轮转阶段数组 可以为空
     * @param array $standard_base_id 基地数组 可以为空
     * @return array 学生uid，时间段，具体轮转科室，带教老师uid
     */
    public function getLeaveKsUsers(string $org_id,array $menu_id,array $uid=[],array $date=[],array $hd_id=[],array $sd_id=[],array $stage=[], array $standard_base_id=[]):array;

}