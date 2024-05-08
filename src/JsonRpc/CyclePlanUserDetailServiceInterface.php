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
     * @param array $params ['type'=>'1末次轮转|2每次轮转','hd_id'=>['本院科室id'],'sd_id'=>['标准科室id'],'stage'=>['1|2|3|99'],'standard_base_id'=>['基地1','基地2']]
     * @return array
     */
    public function examAutoPublishGetUserId(array $params):array;
}