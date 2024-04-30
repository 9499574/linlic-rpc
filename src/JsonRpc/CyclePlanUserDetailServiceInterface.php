<?php

namespace linlic\JsonRpc;

interface CyclePlanUserDetailServiceInterface
{
    /**
     * 根据本院科室ID集合获取当前用户ID集合
     * @param int $org_id
     * @param array $hd_ids
     * @param array $system_id
     * @param array $menu_id
     * @param string $operation
     * @return array
     */
    public function hdIdGetNowUserId(int $org_id,array $hd_ids,array $system_id=[],array $menu_id=[],string $operation='in'):array;
}