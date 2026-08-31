<?php

namespace linlic\JsonRpc;

interface CyclePlanUserDetailServiceInterface
{
    /**
     * 根据本院科室ID集合获取当前用户ID集合
     * @param int $org_id
     * @param array $hd_ids
     * @param array $uid
     * @param array $system_id
     * @param array $menu_id
     * @param string $operation
     * @return array
     */
    public function hdIdGetNowUserId(int $org_id,array $hd_ids,array $uid=[],array $system_id=[],array $menu_id=[],string $operation='in'):array;

    /**
     * 根据本院科室ID集合获取日期范围用户ID集合
     * @param int $org_id
     * @param array $hd_ids
     * @param string $start_date
     * @param string $end_date
     * @param array $uid
     * @param string $operation
     * @return array
     */
    public function hdIdGetDateRangeUserId(int $org_id,array $hd_ids,string $start_date,string $end_date,array $uid=[],string $operation='in'):array;

    /**
     * 考试自动发布根据参数获取用户ID集合
     * @param array $params
     * [
     * 'org_id'=>'645942843777413120',
     * 'system_id'=>'645993719636373504',
     * 'type'=>1,
     * 'date'=>'2024-05-01',
     * 'hd_id'=>["646006905047547904"],
     * 'sd_id'=>[],
     * 'stage'=>[1,2,3,99],
     * 'standard_base_id'=>[]
     * ]
     * @return array
     */
    public function examAutoPublishGetUserId(array $params):array;

    /**
     * 根据日期范围获取用户本院科室ID集合
     * @param int $org_id
     * @param array $uid
     * @param array $menu_id
     * @param string $start_date
     * @param string $end_date
     * @return array
     */
    public function dateRangeGetUserHdIds(int $org_id,array $uid,array $menu_id,string $start_date,string $end_date):array;


    /**
     * 根据机构ID、用户ID、菜单ID集合和日期获取轮转计划用户本院科室Id
     * @param string $orgId
     * @param string $uid
     * @param array $menuIds
     * @param string $date
     * @return string
     */
    public function getCycleUserDateHdId(string $orgId,string $uid,array $menuIds,string $date):string;

    /**
     * 删除轮转计划
     * @param array $params
     * * @return bool
     * * */
    public function delUserPlan(array $params):bool;

    /**
     * 退培用户置灰轮转计划
     * @param array $params
     * * * @return bool
    * */
    public function revokeUserPlan(array $params):bool;

    /**
     * 查询学员轮转排版详情
     * @param array $field 查询字段
     * @param int $org_id 机构ID
     * @param array $system_id 系统ID
     * @param array $menu_id 菜单ID
     * @param array $hd_id 科室ID
     * @param array $uid 用户ID
     * @param array $date_range 日期范围
     * @return array
     */
    public function getUserPlanDetails(array $field, int $org_id, array $system_id = [], array $menu_id = [], array $hd_id = [], array $uid = [], array $date_range = []): array;

    /**
     * 查询学员轮转时长
     * @param int $org_id 机构ID
     * @param array $system_id 系统ID
     * @param array $menu_id 菜单ID
     * @param array $hd_id 科室ID
     * @param array $uid 用户ID
     * @param array $date_range 日期范围
     * @return array
     */
    public function getUserPlanDuration(int $org_id, array $system_id = [], array $menu_id = [], array $hd_id = [], array $uid = [], array $date_range = []): array;
}