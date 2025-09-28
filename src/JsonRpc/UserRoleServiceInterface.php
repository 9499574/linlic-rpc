<?php

namespace linlic\JsonRpc;

interface UserRoleServiceInterface
{
    // 根据用户ID获取用户组
    public function getRoleListByUid(array $params): array;
}