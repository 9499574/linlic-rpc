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
     * @param array $params start_date,end_date搜索条件
     * @return array
     */
    public function getUserGenInfo(int $org_id,array $hd_id,array $uid,string $start_date,string $end_date,array $field=['*'],array $page=[],array $system_id=[],array $menu_id=[],array $params=[]):array;

    /**
     * 判断uid是否有轮转数据（包括历史和当前）
     * @param string $org_id 机构ID
     * @param string $uid 用户ID
     * @return bool
     */
    public function hasCycleData(string $org_id, string $uid): bool;

    /**
     * 获取轮转生成表数据的编号
     * @param int $orgId
     * @param array $userIds
     * @return array
     */
    public function getUserGenIds(int $orgId,array $userIds):array;
}