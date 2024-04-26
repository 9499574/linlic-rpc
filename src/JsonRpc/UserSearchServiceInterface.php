<?php

namespace linlic\JsonRpc;

interface UserSearchServiceInterface
{
    /**
     * 通过搜索条件获取用户
     * @param int $org_id
     * @param string $system_id
     * @param array $search_params
     * @param array $columnArr
     * @param array $uidArr
     * @param bool $showFieldName
     * @return array
     */
    public function get(
        int $org_id,
        string $system_id,
        array $search_params,
        array $columnArr = [],
        array $uidArr = ['uid'],
        bool $showFieldName = false
    ): array;
}