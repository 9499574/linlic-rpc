<?php
namespace linlic\JsonRpc;

interface TeachingActivityForGsServiceInterface
{
    // 根据菜单ID获取级别
    public function getActivityLevelByMenuIds(array $params): array;
}
