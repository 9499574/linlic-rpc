<?php

namespace linlic\JsonRpc;

interface StaffRoomServiceInterface
{
    public function getFields(array $params): array;

    public function getConfigs(array $params): array;

    /**
     * 获取教研室选项
     * @param string $orgId
     * @param int $systemId
     * @param string $menuId
     * @param array $select
     * @param array $where
     * @return array
     */
    public function getStaffRoomOptions(string $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;

    /**
     * 通过科室编号查询教研室
     * @param array $hdIds
     * @return array
     */
    public function getStaffRoomByHdIds(array $hdIds): array;
}