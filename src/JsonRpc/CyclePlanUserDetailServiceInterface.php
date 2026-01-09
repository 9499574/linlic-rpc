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
     * 根据日期范围获取用户ID集合
     * @param int $org_id
     * @param array $hd_ids
     * @param string $start_date
     * @param string $end_date
     * @param array $uid
     * @param array $system_id
     * @param array $menu_id
     * @param string $operation
     * @return array
     */
    public function getDateRangeUserId(int $org_id,array $hd_ids,string $start_date,string $end_date,array $uid=[],array $system_id=[],array $menu_id=[],string $operation='in'):array;

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
}