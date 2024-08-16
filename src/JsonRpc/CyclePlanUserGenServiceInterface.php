<?php

namespace linlic\JsonRpc;

interface CyclePlanUserGenServiceInterface
{
    /**
     * 获取生成的数据
     * @param int $org_id
     * @param array $hd_id
     * @param array $uid
     * @param string $start_date
     * @param string $end_date
     * @param array $field
     * @param array $page
     * @param array $system_id
     * @param array $menu_id
     * @return array
     */
    public function getUserGenInfo(int $org_id,array $hd_id,array $uid,string $start_date,string $end_date,array $field=['*'],array $page=[],array $system_id=[],array $menu_id=[]):array;
}